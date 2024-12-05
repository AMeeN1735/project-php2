<?php
// تعريف أنواع مختلفة من المتغيرات
$integerVar = 10; // عدد صحيح
$floatVar = 10.5; // عدد عشري
$stringVar = "أهلا يا أمين"; // نص
$booleanVar = true; // متغير منطق (صح/خطأ)
$arrayVar = [1, 2, 3, 4, 5]; // مصفوفة
$nullVar = null; // متغير بقيمة null

// if/else: التحقق من نوع العدد
if ($integerVar > 5) {
    echo "العدد أكبر من 5.<br>";
} else {
    echo "العدد أقل من أو يساوي 5.<br>";
}

// while: طباعة الأرقام من 1 إلى 5
$counter = 1;
while ($counter <= 5) {
    echo "القيمة الحالية للعداد: $counter<br>";
    $counter++;
}

// do while: التأكد من تنفيذ الكود مرة واحدة على الأقل
$counter = 6; // قيمة مبدئية
do {
    echo "القيمة الحالية للعداد في do while: $counter<br>";
    $counter++;
} while ($counter <= 5);

// switch: تحديد رسالة بناءً على قيمة معينة
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "اليوم هو الاثنين.<br>";
        break;
    case "Tuesday":
        echo "اليوم هو الثلاثاء.<br>";
        break;
    default:
        echo "اليوم ليس الاثنين أو الثلاثاء.<br>";
        break;
}

// for: التكرار على عناصر المصفوفة
for ($i = 0; $i < count($arrayVar); $i++) {
    echo "العنصر رقم $i في المصفوفة: {$arrayVar[$i]}<br>";
}

// تعليق إضافي: عرض جميع المتغيرات وتعريفاتها
echo "<br>--- تعريف المتغيرات ---<br>";
echo "عدد صحيح: $integerVar<br>";
echo "عدد عشري: $floatVar<br>";
echo "نص: $stringVar<br>";
echo "منطقي: " . ($booleanVar ? 'صح' : 'خطأ') . "<br>";
echo "Null: " . ($nullVar === null ? 'القيمة Null' : 'لها قيمة') . "<br>";

?>