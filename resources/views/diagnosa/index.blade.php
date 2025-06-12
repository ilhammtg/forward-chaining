<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symptom Checker | Network Diagnosis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="diagnosis-card">
            <div class="diagnosis-header">
                <div class="card-icon">
                    <i class="fa-solid fa-wifi"></i>
                </div>
                <h2>Network Symptom Checker</h2>
                <p>Select the symptoms you're experiencing</p> <br>
                <p>ilham | rian | waddah | selvy | khaira</p>
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
                        <label class="symptom-item" data-symptom-id="{{ $item->id }}">
                            <span class="symptom-checkbox">
                                <input type="checkbox" name="gejala[]" value="{{ $item->id }}">
                                <span class="checkmark"></span>
                            </span>
                            <span class="symptom-label">{{ $item->nama_gejala }}</span>
                            <i class="fas fa-info-circle symptom-info" title="More information"></i>
                        </label>
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
            <p>© {{ date('Y') }} Group one. All rights reserved.</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.symptom-checkbox input');
            const selectedCount = document.querySelector('.selected-count strong');

            function updateSelectedCount() {
                const selected = document.querySelectorAll('.symptom-checkbox input:checked').length;
                selectedCount.textContent = selected;

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

            const searchInput = document.getElementById('symptomSearch');
            searchInput.addEventListener('input', function(e) {
                const term = e.target.value.toLowerCase();
                const items = document.querySelectorAll('.symptom-item');

                items.forEach(item => {
                    const text = item.textContent.toLowerCase();
                    item.style.display = text.includes(term) ? 'flex' : 'none';
                });
            });

            const infoIcons = document.querySelectorAll('.symptom-info');
            infoIcons.forEach(icon => {
                icon.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    const symptomName = this.previousElementSibling.textContent;
                    alert(`More information about: ${symptomName}`);
                });
            });

            updateSelectedCount();
        });
    </script>
</body>

</html>
