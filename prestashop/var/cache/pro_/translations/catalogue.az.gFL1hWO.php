<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('az', array (
  'validators' => 
  array (
    'This value should be false.' => 'Bu dəyər false olmalıdır.',
    'This value should be true.' => 'Bu dəyər true olmalıdır.',
    'This value should be of type {{ type }}.' => 'Bu dəyərin tipi {{ type }} olmalıdır.',
    'This value should be blank.' => 'Bu dəyər boş olmalıdır.',
    'The value you selected is not a valid choice.' => 'Seçdiyiniz dəyər düzgün bir seçim değil.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Ən az {{ limit }} seçim qeyd edilməlidir.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Ən çox {{ limit }} seçim qeyd edilməlidir.',
    'One or more of the given values is invalid.' => 'Təqdim edilən dəyərlərdən bir və ya bir neçəsi yanlışdır.',
    'This field was not expected.' => 'Bu sahə gözlənilmirdi.',
    'This field is missing.' => 'Bu sahə əksikdir.',
    'This value is not a valid date.' => 'Bu dəyər düzgün bir tarix deyil.',
    'This value is not a valid datetime.' => 'Bu dəyər düzgün bir tarixsaat deyil.',
    'This value is not a valid email address.' => 'Bu dəyər düzgün bir e-poçt adresi deyil.',
    'The file could not be found.' => 'Fayl tapılmadı.',
    'The file is not readable.' => 'Fayl oxunabilən deyil.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl çox böyükdür ({{ size }} {{ suffix }}). İcazə verilən maksimum fayl ölçüsü {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faylın mime tipi yanlışdr ({{ type }}). İcazə verilən mime tipləri {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Bu dəyər {{ limit }} və ya altında olmalıdır.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Bu dəyər çox uzundur. {{ limit }} və ya daha az simvol olmalıdır.',
    'This value should be {{ limit }} or more.' => 'Bu dəyər {{ limit }} veya daha fazla olmalıdır.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Bu dəyər çox qısadır. {{ limit }} və ya daha çox simvol olmalıdır.',
    'This value should not be blank.' => 'Bu dəyər boş olmamalıdır.',
    'This value should not be null.' => 'Bu dəyər boş olmamalıdır.',
    'This value should be null.' => 'Bu dəyər boş olmamalıdır.',
    'This value is not valid.' => 'Bu dəyər doğru deyil.',
    'This value is not a valid time.' => 'Bu dəyər doğru bir saat deyil.',
    'This value is not a valid URL.' => 'Bu dəyər doğru bir URL değil.',
    'The two values should be equal.' => 'İki dəyər eyni olmalıdır.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl çox böyükdür. İcazə verilən ən böyük fayl ölçüsü {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fayl çox böyükdür.',
    'The file could not be uploaded.' => 'Fayl yüklənəbilmir.',
    'This value should be a valid number.' => 'Bu dəyər rəqəm olmalıdır.',
    'This file is not a valid image.' => 'Bu fayl düzgün bir şəkil deyil.',
    'This is not a valid IP address.' => 'Bu düzgün bir IP adresi deyil.',
    'This value is not a valid language.' => 'Bu dəyər düzgün bir dil deyil.',
    'This value is not a valid locale.' => 'Bu dəyər düzgün bir dil deyil.',
    'This value is not a valid country.' => 'Bu dəyər düzgün bir ölkə deyil.',
    'This value is already used.' => 'Bu dəyər hal-hazırda istifadədədir.',
    'The size of the image could not be detected.' => 'Şəklin ölçüsü hesablana bilmir.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Şəklin genişliyi çox böyükdür ({{ width }}px). İcazə verilən ən böyük genişlik {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Şəklin genişliyi çox kiçikdir ({{ width }}px). Ən az {{ min_width }}px olmalıdır.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Şəklin yüksəkliyi çox böyükdür ({{ height }}px). İcazə verilən ən böyük yüksəklik {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Şəklin yüksəkliyi çox kiçikdir ({{ height }}px). Ən az {{ min_height }}px olmalıdır.',
    'This value should be the user\'s current password.' => 'Bu dəyər istifadəçinin hazırkı parolu olmalıdır.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Bu dəyər tam olaraq {{ limit }} simvol olmaldır.',
    'The file was only partially uploaded.' => 'Fayl qismən yükləndi.',
    'No file was uploaded.' => 'Fayl yüklənmədi.',
    'No temporary folder was configured in php.ini.' => 'php.ini\'də müvəqqəti qovluq quraşdırılmayıb.',
    'Cannot write temporary file to disk.' => 'Müvəqqəti fayl diskə yazıla bilmir.',
    'A PHP extension caused the upload to fail.' => 'Bir PHP əlavəsi faylın yüklənməsinə mane oldu.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bu kolleksiyada {{ limit }} və ya daha çox element olmalıdır.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bu kolleksiyada {{ limit }} və ya daha az element olmalıdır.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bu kolleksiyada tam olaraq {{ limit }} element olmalıdır.',
    'Invalid card number.' => 'Yanlış kart nömrəsi.',
    'Unsupported card type or invalid card number.' => 'Dəstəklənməyən kart tipi və ya yanlış kart nömrəsi.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Bu dəyər doğru bir Beynəlxalq Bank Hesap Nömrəsi (IBAN) deyil.',
    'This value is not a valid ISBN-10.' => 'Bu dəyər doğru bir ISBN-10 deyil.',
    'This value is not a valid ISBN-13.' => 'Bu dəyər doğru bir ISBN-13 deyil.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Bu dəyər doğru bir ISBN-10 və ya ISBN-13 deyil.',
    'This value is not a valid ISSN.' => 'Bu dəyər doğru bir ISSN deyil.',
    'This value is not a valid currency.' => 'Bu dəyər doğru bir valyuta deyil.',
    'This value should be equal to {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} ilə bərabər olmalıdır.',
    'This value should be greater than {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} dəyərindən büyük olmalıdır.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} ilə bərabər və ya daha böyük olmaldır.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Bu dəyər {{ compared_value_type }} {{ compared_value }} ilə eyni olmalıdır.',
    'This value should be less than {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} dəyərindən kiçik olmalıdır.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} dəyərindən kiçik və ya bərabər olmalıdır.',
    'This value should not be equal to {{ compared_value }}.' => 'Bu değer {{ compared_value }} ile eşit olmamalıdır.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Bu dəyər {{ compared_value_type }} {{ compared_value }} ilə eyni olmamalıdır.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Şəkil nisbəti çox büyükdür ({{ ratio }}). İcazə verilən maksimum nisbət: {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Şəkil nisbəti çox balacadır ({{ ratio }}). İcazə verilən minimum nisbət: {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Şəkil kvadratdır ({{ width }}x{{ height }}px). Kvadrat şəkillərə icazə verilmir.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Şəkil albom rejimindədir ({{ width }}x{{ height }}px). Albom rejimli şəkillərə icazə verilmir.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Şəkil portret rejimindədir ({{ width }}x{{ height }}px). Portret rejimli şəkillərə icazə verilmir.',
    'An empty file is not allowed.' => 'Boş fayla icazə verilmir.',
    'The host could not be resolved.' => 'Ünvan tapılmadı.',
    'This value does not match the expected {{ charset }} charset.' => 'Bu dəyər gözlənilən {{ charset }} simvol cədvəli ilə uyğun gəlmir.',
    'This is not a valid Business Identifier Code (BIC).' => 'Bu dəyər doğru bir Biznes Təyinedici Kodu (BIC) deyil.',
    'Error' => 'Xəta',
    'This is not a valid UUID.' => 'Bu dəyər doğru bir UUID deyil.',
    'This value should be a multiple of {{ compared_value }}.' => 'Bu dəyər {{ compare_value }} dəyərinin bölənlərindən biri olmalıdır.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Bu Biznes Təyinedici Kodu (BIC) {{ iban }} IBAN kodu ilə əlaqəli deyil.',
    'This value should be valid JSON.' => 'Bu dəyər doğru bir JSON olmalıdır.',
    'This collection should contain only unique elements.' => 'Bu kolleksiyada sadəcə unikal elementlər olmalıdır.',
    'This value should be positive.' => 'Bu dəyər müsbət olmalıdır.',
    'This value should be either positive or zero.' => 'Bu dəyər müsbət və ya sıfır olmalıdır.',
    'This value should be negative.' => 'Bu dəyər mənfi olmaldır.',
    'This value should be either negative or zero.' => 'Bu dəyər mənfi və ya sıfır olmaldır.',
    'This value is not a valid timezone.' => 'Bu dəyər doğru bir zaman zolağı deyil.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Bu parol data oğurluğunda tapıldığı üçün işlədilməməlidir. Zəhmət olmasa, başqa parol seçin.',
    'This value should be between {{ min }} and {{ max }}.' => 'Bu dəyər {{ min }} və {{ max }} arasında olmaldır.',
    'This value is not a valid hostname.' => 'Bu dəyər doğru bir host adı deyil.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Bu kolleksiyadakı elementlerin sayı {{ compared_value }} tam bölünəni olmalıdır.',
    'This value should satisfy at least one of the following constraints:' => 'Bu dəyər aşağıdakı məcburiyyətlərdən birini qarşılamalıdır:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Bu kolleksiyadakı hər element öz məcburiyyətlərini qarşılamalıdır.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Bu dəyər doğru bir Qiymətli Kağızın Beynəlxalq İdentifikasiya Kodu (ISIN) deyil.',
    'This value should be a valid expression.' => 'Bu dəyər etibarlı ifadə olmalıdır.',
    'This value is not a valid CSS color.' => 'Bu dəyər etibarlı CSS rəngi deyil.',
    'This value is not a valid CIDR notation.' => 'Bu dəyər etibarlı CIDR notasiyası deyil.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Şəbəkə maskasının dəyəri {{ min }} və {{ max }} arasında olmalıdır.',
  ),
));

$catalogueDefault = new MessageCatalogue('default', array (
));
$catalogue->addFallbackCatalogue($catalogueDefault);

return $catalogue;
