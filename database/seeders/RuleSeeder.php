<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuleSeeder extends Seeder
{
    public function run()
    {
        // Rule for ISP problems
        $this->createRulesForProblem(1, [
            [1, 4],       // G1 + G4
            [4],          // G4 alone
            [16],         // G16 alone
            [3, 4],       // G3 + G4
            [1, 3, 4],    // G1 + G3 + G4
            [4, 5],      // G4 + G5
            [13],         // G13 alone (slow connection)
            [1, 13],     // G1 + G13
            [4, 13]       // G4 + G13
        ]);

        // Rule for DNS problems
        $this->createRulesForProblem(2, [
            [1, 5],       // G1 + G5
            [5],          // G5 alone
            [15],         // G15 alone
            [1, 15],     // G1 + G15
            [5, 15],      // G5 + G15
            [10],        // G10 alone
            [1, 10],      // G1 + G10
            [3, 5],       // G3 + G5
            [1, 3, 5]     // G1 + G3 + G5
        ]);

        // Rule for LAN problems
        $this->createRulesForProblem(3, [
            [2],          // G2 alone
            [9],          // G9 alone
            [2, 9],       // G2 + G9
            [17, 18],     // G17 + G18 (can ping local but not gateway)
            [2, 17],      // G2 + G17
            [9, 17],      // G9 + G17
            [2, 9, 17]    // G2 + G9 + G17
        ]);

        // Rule for DHCP problems
        $this->createRulesForProblem(4, [
            [6],          // G6 alone
            [8],          // G8 alone
            [6, 8],       // G6 + G8
            [6, 9],       // G6 + G9
            [8, 9],       // G8 + G9
            [6, 8, 9]     // G6 + G8 + G9
        ]);

        // Rule for IP conflict
        $this->createRulesForProblem(5, [
            [6, 3, 9],    // G6 + G3 + G9
            [6, 9],      // G6 + G9
            [6, 11],      // G6 + G11
            [11],         // G11 alone (intermittent connection)
            [6, 3, 11]    // G6 + G3 + G11
        ]);

        // Rule for browser/cache problems
        $this->createRulesForProblem(6, [
            [1, 10],     // G1 + G10
            [10],         // G10 alone
            [1, 3, 10],   // G1 + G3 + G10
            [1, 17, 10],  // G1 + G17 + G10
            [3, 10]       // G3 + G10
        ]);

        // Rule for WiFi problems
        $this->createRulesForProblem(7, [
            [7],          // G7 alone
            [11],         // G11 alone
            [12],         // G12 alone
            [7, 11],      // G7 + G11
            [11, 12],     // G11 + G12
            [7, 12],      // G7 + G12
            [7, 11, 12]   // G7 + G11 + G12
        ]);

        // Rule for firewall problems
        $this->createRulesForProblem(8, [
            [1, 14],      // G1 + G14
            [14],         // G14 alone
            [3, 14],     // G3 + G14
            [1, 3, 14],   // G1 + G3 + G14
            [5, 14]      // G5 + G14
        ]);

        // Rule for DNS server problems
        $this->createRulesForProblem(9, [
            [5, 15],      // G5 + G15
            [15],         // G15 alone
            [1, 5, 15],   // G1 + G5 + G15
            [3, 5, 15],   // G3 + G5 + G15
            [10, 15]     // G10 + G15
        ]);

        // Rule for cable problems
        $this->createRulesForProblem(10, [
            [2],         // G2 alone
            [2, 9],      // G2 + G9
            [2, 17],      // G2 + G17
            [2, 18]       // G2 + G18
        ]);

        // Rule for network adapter problems
        $this->createRulesForProblem(11, [
            [6, 9],       // G6 + G9
            [9],          // G9 alone
            [6, 17],      // G6 + G17
            [9, 17],      // G9 + G17
            [6, 9, 17]    // G6 + G9 + G17
        ]);
    }

    private function createRulesForProblem($masalahId, array $gejalaCombinations)
    {
        $ruleCounter = 1;

        foreach ($gejalaCombinations as $gejalaIds) {
            $ruleCode = 'R' . (DB::table('rules')->count() + 1);
            $ruleId = DB::table('rules')->insertGetId([
                'kode' => $ruleCode,
                'masalah_id' => $masalahId
            ]);

            foreach ($gejalaIds as $gejalaId) {
                DB::table('rule_gejala')->insert([
                    'rule_id' => $ruleId,
                    'gejala_id' => $gejalaId
                ]);
            }

            $ruleCounter++;
        }
    }
}
