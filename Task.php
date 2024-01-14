
require_once __DIR__ . "\LuasLingkaranTiga.php";
require_once __DIR__ . "\LuasLingkaranLima.php";
require_once __DIR__ . "\LuasPersegi.php";



for($i = 0; $i <= 100; $i++){
    if ($i % 3 == 0 && $i % 5 == 0) {
    Persegi($i);}
    elseif ($i % 3 == 0) {
    KelipatanTiga($i);
    }
    elseif ($i % 5 == 0) {
    KelipatanLima($i);}
    
    
    else {
        $a =number_format((float) $i,2, '.' , '');
        echo ($a .PHP_EOL);}
    
    
   
}

