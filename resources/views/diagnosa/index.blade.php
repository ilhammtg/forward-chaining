<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symptom Checker | Health Diagnosis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #6c5ce7;
            --primary-light: #a29bfe;
            --primary-dark: #5649c0;
            --secondary: #00cec9;
            --accent: #fd79a8;
            --background: #f9f9ff;
            --card-bg: #ffffff;
            --text: #2d3436;
            --text-light: #636e72;
            --border: #dfe6e9;
            --success: #00b894;
            --warning: #fdcb6e;
            --error: #d63031;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--background);
            color: var(--text);
            line-height: 1.6;
            min-height: 100vh;
            padding: 2rem;
            background-image: radial-gradient(circle at 1px 1px, var(--border) 1px, transparent 0);
            background-size: 20px 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .diagnosis-card {
            background: var(--card-bg);
            border-radius: 24px;
            box-shadow: 0 15px 50px -10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .diagnosis-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 60px -10px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 2.5rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .card-header::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: -50px;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .card-header::before {
            content: '';
            position: absolute;
            top: -30px;
            right: -30px;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .card-header h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
        }

        .card-header p {
            opacity: 0.9;
            font-weight: 400;
            position: relative;
            z-index: 1;
        }

        .card-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: white;
            position: relative;
            z-index: 1;
        }

        .search-container {
            padding: 1.5rem;
            background: var(--card-bg);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            border-radius: 12px;
            border: 1px solid var(--border);
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--background);
        }

        .search-box input:focus {
            outline: none;
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(108, 92, 231, 0.2);
        }

        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary);
        }

        .symptoms-list {
            max-height: 400px;
            overflow-y: auto;
        }

        .symptom-item {
            padding: 1.25rem 2rem;
            display: flex;
            align-items: center;
            border-bottom: 1px solid var(--border);
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .symptom-item:hover {
            background: rgba(108, 92, 231, 0.03);
        }

        .symptom-item.selected {
            background: rgba(108, 92, 231, 0.08);
        }

        .symptom-checkbox {
            position: relative;
            margin-right: 1.5rem;
        }

        .symptom-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkmark {
            position: relative;
            height: 24px;
            width: 24px;
            background-color: var(--background);
            border: 2px solid var(--border);
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        .symptom-checkbox input:checked~.checkmark {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
            left: 7px;
            top: 3px;
            width: 6px;
            height: 12px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .symptom-checkbox input:checked~.checkmark:after {
            display: block;
        }

        .symptom-label {
            flex: 1;
            font-weight: 500;
        }

        .symptom-info {
            color: var(--text-light);
            margin-left: 1rem;
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        .symptom-item:hover .symptom-info {
            opacity: 1;
        }

        .action-bar {
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--card-bg);
            border-top: 1px solid var(--border);
        }

        .selected-count {
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .selected-count strong {
            color: var(--primary);
            font-weight: 600;
        }

        .btn-diagnose {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            padding: 0.9rem 2.5rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 15px rgba(108, 92, 231, 0.3);
        }

        .btn-diagnose:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(108, 92, 231, 0.4);
        }

        .btn-diagnose:active {
            transform: translateY(0);
        }

        .btn-diagnose i {
            margin-right: 0.5rem;
        }

        .disclaimer {
            text-align: center;
            margin-top: 2rem;
            color: var(--text-light);
            font-size: 0.85rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Animation for selected items */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(108, 92, 231, 0.4);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(108, 92, 231, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(108, 92, 231, 0);
            }
        }

        .pulse {
            animation: pulse 1.5s infinite;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            .card-header {
                padding: 2rem 1.5rem;
            }

            .card-header h2 {
                font-size: 1.7rem;
            }

            .symptom-item {
                padding: 1.25rem 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="diagnosis-card">
            <div class="card-header">
                <div class="card-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h2>Symptom Checker</h2>
                <p>Select the symptoms you're experiencing</p>
            </div>

            <form method="POST" action="/diagnosa">
                @csrf

                <div class="search-container">
                    <div class="search-box">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" id="symptomSearch" placeholder="Search symptoms...">
                    </div>
                </div>

                <div class="symptoms-list">
                    @foreach ($gejalas as $item)
                        <div class="symptom-item" data-symptom-id="{{ $item->id }}">
                            <label class="symptom-checkbox">
                                <input type="checkbox" name="gejala[]" value="{{ $item->id }}">
                                <span class="checkmark"></span>
                            </label>
                            <span class="symptom-label">{{ $item->nama_gejala }}</span>
                            <i class="fas fa-info-circle symptom-info" title="More information"></i>
                        </div>
                    @endforeach
                </div>

                <div class="action-bar">
                    <div class="selected-count">
                        <strong>0</strong> symptoms selected
                    </div>
                    <button type="submit" class="btn-diagnose pulse">
                        <i class="fas fa-stethoscope"></i> Get Diagnosis
                    </button>
                </div>
            </form>
        </div>

        <div class="disclaimer">
            <p>This tool is not a substitute for professional medical advice. Always consult a healthcare provider for
                proper diagnosis and treatment.</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Update selected count
            const checkboxes = document.querySelectorAll('.symptom-checkbox input');
            const selectedCount = document.querySelector('.selected-count strong');

            function updateSelectedCount() {
                const selected = document.querySelectorAll('.symptom-checkbox input:checked').length;
                selectedCount.textContent = selected;

                // Add/remove pulse animation based on selection
                const diagnoseBtn = document.querySelector('.btn-diagnose');
                if (selected > 0) {
                    diagnoseBtn.classList.add('pulse');
                } else {
                    diagnoseBtn.classList.remove('pulse');
                }
            }

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const item = this.closest('.symptom-item');
                    if (this.checked) {
                        item.classList.add('selected');
                    } else {
                        item.classList.remove('selected');
                    }
                    updateSelectedCount();
                });
            });

            // Search functionality
            const searchInput = document.getElementById('symptomSearch');
            searchInput.addEventListener('input', function(e) {
                const term = e.target.value.toLowerCase();
                const items = document.querySelectorAll('.symptom-item');

                items.forEach(item => {
                    const text = item.textContent.toLowerCase();
                    if (text.includes(term)) {
                        item.style.display = 'flex';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });

            // Tooltip for info icons
            const infoIcons = document.querySelectorAll('.symptom-info');
            infoIcons.forEach(icon => {
                icon.addEventListener('click', function(e) {
                    e.preventDefault();
                    const symptomName = this.previousElementSibling.textContent;
                    alert(`More information about: ${symptomName}`);
                });
            });

            // Initialize count
            updateSelectedCount();
        });
    </script>
</body>

</html>
