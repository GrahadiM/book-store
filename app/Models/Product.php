<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(User::class);
    }

    public function getBooksJson()
    {
        $books = [
            0 => [
                'id' => 1,
                'pid' => 'ENT-1',
                'title' => 'The Indian Economy : For UPSC And State Civil Services Preliminary And Main Examinations',
                'author' => 'Sanjiv Verma',
                'price' => 250000,
                'discount' => 50,
                'available' => 50,
                'publisher' => 'Unique Pubishers',
                'edition' => '2',
                'category' => 'Entrance Exam',
                'description' => 'Sanjiv Vermaâs The Indian Economy : For UPSC and State Civil Services Preliminary and Main Examinations 2nd Edition is a comprehensive book for UPSC aspirants. The book comprises of multiple chapters which give you a better understanding of various topics. This book is essential for candidates applying for UPSC and other competitive exams.About Sanjiv VermaSanjiv Verma is an Indian author. He has penned down the book Â The Indian Economy : For UPSC and State Civil Services Preliminary and Main Examinations 2nd Edition. # Part A: Domestic Economy1. Output of an Economy2. Towards Inclusive Growth (Growth and Development)3. Sustainable Development and Green GDP4. Poverty and Social Sector5. Food SecurityÂ 6. Agriculture SectorÂ 7. Land Reforms - Another Perspective8. Salient Features - New India9. Industrial Sector and Liberalization10. Infrastructure Development11. Investment Models12. Integrated Energy Policy (2031â32)13. Government Finances14. Bridging Deficits Money and Government Borrowings15. Banking16. Inflation17. Capital Market18. Planning in IndiaPart B: External Sector - Looking Outwards Towards Globalization and Beyond19. Looking Outward - Towards Globalization20. Inward and Outward - Looking Economies Globalization21. Going Forward - India and Globalization22. Export-Led Growth Strategy - SEZs23. Foreign Trade Policy (2009-2014)24. Balance of Payments of Economies (BOP)Â 25. Trade Reforms and Foreign Exchange Management Act (FEMA) 199926. Foreign Investment in IndiaÂ 27. Multilateral Financial Institutions28. External Debt of India29. Exchange Rate Determination30. Foreign Exchange Reserves31. Regional Trading BlocsÂ Part C: Global Economy and Outlook Post-crisis and Beyond32. India and the Global Economy33. Global Economy - A Transition34. Global Integration35. Lessons from Crises in Open EconomiesÂ 36. Global Financial Meltdown37. Global Crisis - Government Interventions38. Overview of Recent Crises Since 200839. Global Consensus - Going Forward40. Way Going Forward - Addressing Structural IssuesÂ 41. Global Unresolved Issues42. Post-Crisis - Future of Globalization43. World Trade Organization (WTO) - Issues and IndiaPart D: Indian Economy Revisited Outlook and Challenges44. Two Decades of Economic Reforms - India45. Indian Economy - Outlook and Challenges # Sanjiv Verma is an Indian author. He has penned down the book Â The Indian Economy : For UPSC and State Civil Services Preliminary and Main Examinations 2nd Edition. # Part A: Domestic Economy1. Output of an Economy2. Towards Inclusive Growth (Growth and Development)3. Sustainable Development and Green GDP4. Poverty and Social Sector5. Food SecurityÂ 6. Agriculture SectorÂ 7. Land Reforms - Another Perspective8. Salient Features - New India9. Industrial Sector and Liberalization10. Infrastructure Development11. Investment Models12. Integrated Energy Policy (2031â32)13. Government Finances14. Bridging Deficits Money and Government Borrowings15. Banking16. Inflation17. Capital Market18. Planning in India # Part B: External Sector - Looking Outwards Towards Globalization and Beyond19. Looking Outward - Towards Globalization20. Inward and Outward - Looking Economies Globalization21. Going Forward - India and Globalization22. Export-Led Growth Strategy - SEZs23. Foreign Trade Policy (2009-2014)24. Balance of Payments of Economies (BOP)Â 25. Trade Reforms and Foreign Exchange Management Act (FEMA) 199926. Foreign Investment in IndiaÂ 27. Multilateral Financial Institutions28. External Debt of India29. Exchange Rate Determination30. Foreign Exchange Reserves31. Regional Trading Blocs # Part C: Global Economy and Outlook Post-crisis and Beyond32. India and the Global Economy33. Global Economy - A Transition34. Global Integration35. Lessons from Crises in Open EconomiesÂ 36. Global Financial Meltdown37. Global Crisis - Government Interventions38. Overview of Recent Crises Since 200839. Global Consensus - Going Forward40. Way Going Forward - Addressing Structural IssuesÂ 41. Global Unresolved Issues42. Post-Crisis - Future of Globalization43. World Trade Organization (WTO) - Issues and India # Part D: Indian Economy Revisited Outlook and Challenges44. Two Decades of Economic Reforms - India45. Indian Economy - Outlook and Challenges',
                'language' => 'English',
                'page' => 256,
                'weight' => 500,
            ],
            1 => [
                'id' => 2,
                'pid' => 'ENT-4',
                'title' => 'Previous YearsSolved Papers & 10 Practice Sets CMC (Vellore & Ludhiana) Entrance Exam',
                'author' => 'Arihant Experts',
                'price' => 187500,
                'discount' => 50,
                'available' => 50,
                'publisher' => 'Arihant Publication',
                'edition' => '4',
                'category' => 'Entrance Exam',
                'description' => 'The Christian Medical College Entrance Exam is conducted by CMC Vellore Association and CMC, Ludhiana Society respectively for admission toChristian Medical College (CMC) Vellore and Ludhiana. The CMC Entrance Examinationserves as a qualifying examination for admission to undergraduate medicalcourses such as MBBS, BDS and B.Sc Nursing in CMC Vellore and CMC Ludhiana.This book has been designed for the aspirants aiming to get admission in CMCVellore and Ludhiana. The present book contains both previous years',
                'language' => 'English',
                'page' => 590,
                'weight' => 500,
            ],
        ];

        return $books;
    }
}
