README

Funkcijos Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’) rezultatas yra 6 dėl to, kad ši funkcija nėra 'strict_types' veikimo aprėptyje, o tokiu atveju PHP visus jos gautus argumentus paverčia (coerce) nurodyto tipo kintamaisiais ir atlieka veiksmus su jais.

Funkcija Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’):  
- jeigu deklaruojama su argumentų tipo apibrėžimu ir kviečiama iš failo be strict_types deklaracijos - pakeičia argumentų tipus ir atitinkamai - vertes ('coerce'), ir atlieka veiksmus su pakeistais kintamaisiais dėl šios priežasties:  
				Strict typing applies to function calls made from within the file with strict typing enabled, not to the functions declared within that file. If a file without strict typing enabled makes a call to a function that was defined in a file with strict typing, the caller's preference (weak typing) will be respected, and the value will be coerced.  
- jeigu deklaruojama nenurodant argumentų tipo, bet joje naudojant papildomą funkciją sumStrict(), deklaruotą tame pačiame 'strict_types' faile ir su apibrėžtu argumentų tipu - gauna argumento tipo neatitikimo klaidą iš papildomos funkcijos (kurią galima sugauti try-catch bloke).

    Deklaravus funkcijos rezultato tipą 'int', viskas veiktų, tik būtų reikėję jos rezultatą pateikti int tipo. Tik dėl to, kad funkcijos rezulatatu galima būtų išvesti klaidos tekstą, nenurodžiau jokio rezultato tipo. (Tiek argumentų, tiek rezultato tipas pibrėžtas pagalbinėje sumStrict() funkcijoje).
