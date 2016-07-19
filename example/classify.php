<?php
require __DIR__ . '/../lib/LanguageDetector/autoload.php';

$detect = LanguageDetector\Detect::initByPath('datafile.php');

var_dump($detect->detect("Agricultura (-ae, f.), sensu latissimo, est summa omnium artium et scientiarum et technologiarum quae de terris colendis et animalibus creandis curant, ut poma, frumenta, charas, carnes, textilia, et aliae res e terra bene producantur. Specialius, agronomia est ars et scientia quae terris colendis student, agricultio autem animalibus creandis."));

var_dump($detect->detect("El llatí és una llengua indoeuropea de la branca itàlica, parlada antigament pels romans. A partir de l'evolució de la seva versió vulgar en sorgiren les llengües romàniques que sobreviuen avui dia.
            "));
var_dump($detect->detect("hola"));
var_dump($detect->detect("Hi there, this is a tiny text"));
var_dump($detect->detect("* This file implements in memory hash tables with insert/del/replace/find/
             * get-random-element operations. Hash tables will auto resize if needed
              * tables of power of two in size are used, collisions are handled by
               * chaining. See the source code for more information... :)"));

var_dump($detect->detect("House of Cards is an American political drama series developed and produced by Beau Willimon. It is an adaptation of a previous BBC miniseries of the same name which is based on the novel by Michael Dobbs. The entire first season premiered on February 1, 2013, on the streaming service Netflix.[1] A second season of 13 episodes is currently in production.[1][2]
            "));

var_dump($detect->detect("हिन्दी का क्षेत्र विशाल है तथा हिन्दी की अनेक बोलियाँ (उपभाषाएँ) हैं। इनमें से कुछ में अत्यंत उच्च श्रेणी के साहित्य की रचना भी हुई है। ऐसी बोलियों में ब्रजभाषा और अवधी प्रमुख हैं। ये बोलियाँ हिन्दी की विविधता हैं और उसकी शक्ति भी। वे हिन्दी की जड़ों को गहरा बनाती हैं। हिन्दी की बोलियाँ और उन बोलियों की उपबोलियाँ हैं जो न केवल अपने में एक बड़ी परंपरा, इतिहास, सभ्यता को समेटे हुए हैं वरन स्वतंत्रता संग्राम, जनसंघर्ष, वर्तमान के बाजारवाद के खिलाफ भी उसका रचना संसार सचेत है।[9]"));

var_dump($detect->detect("১৯৫১-৫২ খ্রিস্টাব্দে পূর্ব পাকিস্তানে সংগঠিত বাংলা ভাষা আন্দোলন এই ভাষার সাথে বাঙালি অস্তিত্বের যোগসূত্র স্থাপন করেছিল। ১৯৫২ খ্রিস্টাব্দের ২১শে ফেব্রুয়ারি, ঢাকা বিশ্ববিদ্যালয়ে প্রতিবাদী ছাত্র ও আন্দোলনকারীরা মাতৃভাষা বাংলায় কথা বলা ও লেখাপড়ার অধিকারের দাবীতে নিজেদের জীবন উৎসর্গ করেন। মাতৃভাষার জন্য তাঁদের বলিদানের স্বীকৃতি স্বরূপ ১৯৯৯ খ্রিস্টাব্দে ইউনেস্কো ২১শে ফেব্রুয়ারি দিনটিকে আন্তর্জাতিক মাতৃভাষা দিবস হিসেবে ঘোষণা করে।"));

var_dump($detect->detect('Ocenia się, że język polski jest językiem ojczystym około 44 milionów ludzi na świecie[1] (w literaturze naukowej można spotkać szacunki od 39[2][3] do 48 milionów[4]), mieszkańców Polski oraz tzw. Polonii, czyli Polaków zamieszkałych za granicą.'));

var_dump($detect->detect('Die benaming word ontleen aan die verskynsel dat die Indo-Europese tale onder te verdeel is in een groep waarby die woord vir die getal 100 met velare of palatale plofklank begin (byvoorbeeld k), en in een groep waarby die woord vir 100 met \'n alveolêre of \'n palato-alveolêre frikatiewe klank begin (byvoorbeeld s of sj).'));

var_dump($detect->detect('Po osmanlijskom osvajanju, koje je započelo 1463. godine, a nastavilo se u raznim područjima današnje BiH u narednih 50 godina, dolazi do znatnih jezičkih promjena.'));
