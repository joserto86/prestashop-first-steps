<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('uz', array (
  'validators' => 
  array (
    'This value should be false.' => 'Qiymat noto\'g\'ri bo\'lishi kerak.',
    'This value should be true.' => 'Qiymat to\'g\'ri bo\'lishi kerak.',
    'This value should be of type {{ type }}.' => 'Qiymat turi {{ type }} bo\'lishi kerak.',
    'This value should be blank.' => 'Qiymat bo\'sh bo\'lishi kerak.',
    'The value you selected is not a valid choice.' => 'Tanlangan qiymat to\'g\'ri emas.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Siz hech bo\'lmaganda {{ limit }} ta qiymat tanlashingiz kerak.|Siz kamida {{ limit }} ta qiymat tanlashingiz kerak.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Siz {{ limit }} ta qiymatni tanlashingiz kerak.|Siz {{ limit }} dan ortiq qiymat tanlashingiz kerak.',
    'One or more of the given values is invalid.' => 'Belgilangan qiymatlarning bir yoki bir nechtasi noto\'g\'ri.',
    'This field was not expected.' => 'Ushbu maydon kutilmagan edi.',
    'This field is missing.' => 'Bu maydon majvud emas.',
    'This value is not a valid date.' => 'Ushbu sana noto\'g\'ri.',
    'This value is not a valid datetime.' => 'Sana va vaqt qiymati noto\'g\'ri.',
    'This value is not a valid email address.' => 'Elektron pochta manzili noto\'g\'ri.',
    'The file could not be found.' => 'Fayl topilmadi.',
    'The file is not readable.' => 'Faylni o\'qib bo\'lmadi.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl hajmi katta ({{ size }} {{ suffix }}). Maksimal ruxsat etilgan hajim {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faylning MIME turi noto\'g\'ri ({{ type }}). Ruxsat etilgan MIME turlar {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Qiymat {{ limit }} ga teng yoki kam bo\'lishi kerak.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Qiymat juda uzun. {{ limit }} ga teng yoki kam bo\'lishi kerak.|Qiymat juda uzun. {{ limit }} yoki undan kam belgidan iborat bo\'lishi kerak.',
    'This value should be {{ limit }} or more.' => 'Qiymat {{ limit }} yoki undan ortiq bo\'lishi kerak.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Qiymat juda qisqa. {{ limit }} ta yoki undan ortiq belgidan iborat bo\'lishi kerak.|Qiymat juda qisqa. {{ limit }} yoki undan ko\'p belgidan iborat bo\'lishi kerak',
    'This value should not be blank.' => 'Qiymatni bo\'sh kirtish mumkin emas.',
    'This value should not be null.' => 'Qiymat null bo\'lmasligi kerak.',
    'This value should be null.' => 'Qiymat null bo\'lishi kerak.',
    'This value is not valid.' => 'Qiymat noto\'g\'ri.',
    'This value is not a valid time.' => 'Vaqt noto\'g\'ri.',
    'This value is not a valid URL.' => 'URL noto\'g\'ri',
    'The two values should be equal.' => 'Ikkala qiymat ham bir xil bo\'lishi kerak.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl hajmi katta. Maksimal ruxsat berilgan hajim {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fayl hajmi katta.',
    'The file could not be uploaded.' => 'Faylni yuklab bo\'lmadi.',
    'This value should be a valid number.' => 'Qiymat raqam bo\'lishi kerak.',
    'This file is not a valid image.' => 'Fayl yaroqli rasm formati emas.',
    'This is not a valid IP address.' => 'Ip manzil noto\'g\'ri.',
    'This value is not a valid language.' => 'Noto\'g\'ri til.',
    'This value is not a valid locale.' => 'Ushbu qiymat mahalliy qiymat emas.',
    'This value is not a valid country.' => 'Mamlakat qiymati noto\'g\'ri.',
    'This value is already used.' => 'Ushbu qiymat allaqachon ishlatilgan.',
    'The size of the image could not be detected.' => 'Rasm o\'lchamini aniqlab bo\'lmadi.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Rasm kengligi juda katta ({{ width }}px). Maksimal ruxsat etilgan kenglik {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Rasm kengligi juda kichkina ({{ width }}px). Minimal ruxsat etilgan kenglik {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Rasm bo\'yi juda katta ({{ height }}px). Maksimal ruxsat etilgan balandlik {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Rasm bo\'yi juda kichkina ({{ height }}px). Minimal ruxsat etilgan balandlik {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Qiymat joriy foydalanuvchi paroli bo\'lishi kerak.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Qiymat {{ limit }} ta belgidan iborat bo\'lishi kerak.|Qiymat {{ limit }} belgidan iborat bo\'lishi kerak.',
    'The file was only partially uploaded.' => 'Fayl faqat qisman yuklangan.',
    'No file was uploaded.' => 'Fayl yuklanmagan.',
    'No temporary folder was configured in php.ini.' => 'php.ini da vaqtinchalik katalog sozlanmagan.',
    'Cannot write temporary file to disk.' => 'Diskka vaqtinchalik faylni yozib bo\'lmadi.',
    'A PHP extension caused the upload to fail.' => 'PHP kengaytmasi yuklash paytida xatolik yuz berdi.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ushbu to\'plam {{ limit }} ta yoki undan ko\'p narsalarni o\'z ichiga olishi kerak.|Ushbu to\'plam {{ limit }} yoki undan ortiq narsalarni o\'z ichiga olishi kerak.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ushbu to\'plam {{ limit }} ta yoki undan kam narsalarni o\'z ichiga olishi kerak.|Ushbu to\'plamda {{ limit }} yoki undan kam element bo\'lishi kerak.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ushbu to\'plam to\'liq {{ limit }} narsani o\'z ichiga olishi kerak.|Ushbu to\'plamda to\'liq {{ limit }} ta ma\'lumotlar bo\'lishi kerak.',
    'Invalid card number.' => 'Kata raqami noto\'g\'ri.',
    'Unsupported card type or invalid card number.' => 'Qo\'llab-quvvatlanmaydigan karta turi yoki yaroqsiz karta raqami.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Qiymat haqiqiy xalqaro hisob raqamining raqami (IBAN) emas.',
    'This value is not a valid ISBN-10.' => 'Qiymat to\'g\'ri ISBN-10 formatida emas.',
    'This value is not a valid ISBN-13.' => 'Qiymat to\'g\'ri ISBN-13 formatida emas.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Qiymat ISBN-10 va ISBN-13 formatlariga mos kelmaydi.',
    'This value is not a valid ISSN.' => 'Qiymat ISSN formatiga mos kelmaydi.',
    'This value is not a valid currency.' => 'Noto\'g\'ri valyuta formati.',
    'This value should be equal to {{ compared_value }}.' => 'Qiymat {{ compared_value }} ga teng bo\'lishi shart.',
    'This value should be greater than {{ compared_value }}.' => 'Qiymat {{ compared_value }} dan katta bo\'lishi shart.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Qiymat {{ compared_value }} dan katta yoki teng bo\'lishi shart.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значение должно быть идентичным {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Qiymat bir xil bo\'lishi kerak {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Qiymat {{ compared_value }} dan kichik yoki teng bo\'lishi shart.',
    'This value should not be equal to {{ compared_value }}.' => 'Qiymat {{ compared_value }} ga teng bo\'lmasligi kerak.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Qiymat bir xil bo\'lishi kerak emas {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Rasmning tomonlari nisbati juda katta ({{ ratio }}). Maksimal tomonlar nisbati {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Rasmning format nisbati juda kichik ({{ ratio }}). Minimal tomonlar nisbati {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Rasm kvadrat shaklida ({{ width }}x{{ height }}px). Kvadrat shaklida tasvirlarga ruxsat berilmaydi.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Landshaft tasvir ({{ width }}x{{ height }}px). Landshaft rasmlarga ruxsat berilmaydi.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Portret rasm ({{ width }}x{{ height }}px). Portretlarga ruxsat berilmaydi.',
    'An empty file is not allowed.' => 'Bo\'sh fayllarga ruxsat berilmagan.',
    'The host could not be resolved.' => 'Xost nomini nomiga ruxsat berilmagan.',
    'This value does not match the expected {{ charset }} charset.' => 'Qiymat kutilgan {{ charset }} kodlashiga mos kelmaydi.',
    'This is not a valid Business Identifier Code (BIC).' => 'Qiymat BIC formatida emas.',
    'Error' => 'Xatolik',
    'This is not a valid UUID.' => 'Qiymat UUID formatida emas.',
    'This value should be a multiple of {{ compared_value }}.' => 'Qiymat {{ compared_value }} ning ko\'paytmasi bo\'lishi kerak.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ushbu BIC IBAN {{ iban }} bilan bog\'liq emas..',
    'This value should be valid JSON.' => 'Qiymat to\'g\'ri JSON bo\'lishi kerak.',
    'This collection should contain only unique elements.' => 'Ushbu kolleksiyada takroriy elementlar bo\'lmasligi kerak.',
    'This value should be positive.' => 'Qiymat musbat bo\'lishi kerak.',
    'This value should be either positive or zero.' => 'Qiymat musbat yoki 0 ga teng bo\'lishi kerak.',
    'This value should be negative.' => 'Qiymat manfiy bo\'lishi kerak.',
    'This value should be either negative or zero.' => 'Qiymat manfiy yoki 0 ga teng bo\'lishi kerak.',
    'This value is not a valid timezone.' => 'Qiymat to\'g\'ri vaqt zonasi emas.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ushbu parol ma\'lumotlarning tarqalishi tufayli buzilgan va uni ishlatmaslik kerak. Boshqa paroldan foydalaning.',
    'This value should be between {{ min }} and {{ max }}.' => 'Qiymat {{ min }} va {{ max }} oralig\'ida bo\'lishi shart.',
    'This value is not a valid hostname.' => 'Qiymat to\'g\'ri xost nomi emas.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Ushbu to\'plamdagi narsalar soni {{ compared_value }} dan ko\'p bo\'lishi kerak.',
    'This value should satisfy at least one of the following constraints:' => 'Qiymat quyidagi cheklovlardan kamida bittasiga javob berishi kerak:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Ushbu to\'plamdagi har bir narsa o\'ziga xos cheklovlarni qondirishi kerak.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Qiymat Qimmatli qog\'ozlarning xalqaro identifikatsiya raqami (ISIN) ga mos emas.',
    'This value should be a valid expression.' => 'Ushbu qiymat to\'g\'ri ifoda bo\'lishi kerak.',
    'This value is not a valid CSS color.' => 'Bu qiymat haqiqiy CSS rangi emas.',
    'This value is not a valid CIDR notation.' => 'Qiymat CIDR belgisiga mos kelmaydi.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Tarmoq niqobining qiymati {{ min }} va {{ max }} oralig\'ida bo\'lishi kerak.',
  ),
));

$catalogueDefault = new MessageCatalogue('default', array (
));
$catalogue->addFallbackCatalogue($catalogueDefault);

return $catalogue;
