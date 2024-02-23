<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('my', array (
  'validators' => 
  array (
    'This value should be false.' => 'ဤတန်ဖိုးသည် false ဖြစ်ရမည်။',
    'This value should be true.' => 'ဤတန်ဖိုးသည် true ဖြစ်ရမည်။',
    'This value should be of type {{ type }}.' => 'ဤတန်ဖိုးသည် {{ type }} အမျိုးအစားဖြစ်ရမည်။ ',
    'This value should be blank.' => 'ဤတန်ဖိုးသည် ကွပ်လပ်မဖြစ်သင့်ပါ။',
    'The value you selected is not a valid choice.' => 'သင်ရွေးချယ်သောတန်ဖိုးသည် သင့်လျှော်သော် တန်ဖိုးမဟုတ်ပါ။',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'သင်သည် အနည်းဆုံးရွေးချယ်မှု {{ limit }} ခုရွေးချယ်ရမည်။',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'သင်သည်အများဆုံး {{ limit }} ခုသာရွေးချယ်ခွင့်ရှိသည်။',
    'One or more of the given values is invalid.' => 'ပေးထားသောတန်ဖိုးတစ်ခု (သို့မဟုတ်) တစ်ခုထက်ပို၍မမှန်ကန်ပါ။',
    'This field was not expected.' => 'ဤကွက်လပ်ကိုမမျှော်လင့်ထားပါ။',
    'This field is missing.' => 'ဤကွက်လပ်ကိုမမျှော်လင့်ထားပါ။',
    'This value is not a valid date.' => 'ဤတန်ဖိုးသည်မှန်ကန်သော်ရက်စွဲမဟုတ်ပါ။',
    'This value is not a valid datetime.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော် ရက်စွဲ/အချိန် မဟုတ်ပါ။',
    'This value is not a valid email address.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော် အီးမေးလိပ်စာ မဟုတ်ပါ။',
    'The file could not be found.' => 'ဖိုင်ရှာမတွေ့ပါ။',
    'The file is not readable.' => 'ဤဖိုင်ကို ဖတ်၍မရပါ။',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ဖိုင်အရွယ်အစား အလွန်ကြီးနေသည် ({{ size }} {{ suffix }}). ခွင့်ပြုထားသော အများဆုံး ဖိုင်ဆိုဒ်သည် {{ limit }} {{ suffix }} ဖြစ်သည်။',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'ဖိုင်၏ mime အမျိုးအစားမမှန်ကန်ပါ ({{ type }})။ ခွင့်ပြုထားသော mime အမျိုးအစားများမှာ {{ types }}.',
    'This value should be {{ limit }} or less.' => 'ဤတန်ဖိုးသည် {{ limit }} (သို့မဟုတ်) {{ limit }} ထက်နည်းသင့်သည်။',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'ဤတန်ဖိုးသည် အလွန်ရှည်လွန်းသည်။ ၎င်းတွင်အက္ခရာ {{ limit }} (သို့မဟုတ်) ၎င်းထက်နည်းသင့်သည်။ | ဤတန်ဖိုးသည် အလွန်ရှည်လွန်းသည်။ ၎င်းတွင်အက္ခရာ {{limit}} ခုနှင့်အထက်ရှိသင့်သည်။',
    'This value should be {{ limit }} or more.' => 'ဤတန်ဖိုးသည် {{limit}} (သို့မဟုတ်) ထို့ထက်ပိုသင့်သည်။',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'ဤတန်ဖိုးသည် အလွန်တိုလွန်းသည်။ ၎င်းတွင်အက္ခရာ {{limit}} (သို့မဟုတ်) ထို့ထက်ပိုရှိသင့်သည်။ | ဤတန်ဖိုးသည်တိုလွန်းသည်။ ၎င်းတွင်အက္ခရာ {{limit}} လုံးနှင့်အထက်ရှိသင့်သည်။',
    'This value should not be blank.' => 'ဤတန်ဖိုးသည်ကွက်လပ်မဖြစ်သင့်ပါ။',
    'This value should not be null.' => 'ဤတန်ဖိုးသည် null မဖြစ်သင့်ပါ။',
    'This value should be null.' => 'ဤတန်ဖိုးသည် null ဖြစ်သင့်သည်။',
    'This value is not valid.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောတန်ဖိုးမဟုတ်ပါ။',
    'This value is not a valid time.' => 'ဤတန်ဖိုးသည်မှန်ကန်သော အချိန်တန်ဖိုးမဟုတ်ပါ။',
    'This value is not a valid URL.' => 'ဤတန်ဖိုးသည်မှန်ကန်သော URL တန်ဖိုးမဟုတ်ပါ။',
    'The two values should be equal.' => 'တန်ဖိုးနှစ်ခုသည် တူညီသင့်သည်။',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ဤဖိုင်သည် အလွန်ကြီးသည်။ ခွင့်ပြုထားသည့်အများဆုံးဖိုင်အရွယ်အစားသည် {{ limit }} {{ suffix }} ဖြစ်သည်။',
    'The file is too large.' => 'ဤဖိုင်သည် အလွန်ကြီးသည်။',
    'The file could not be uploaded.' => 'ဤဖိုင်ကိုတင်၍မရပါ။',
    'This value should be a valid number.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောနံပါတ်ဖြစ်သင့်သည်။',
    'This file is not a valid image.' => 'ဤဖိုင်သည်မှန်ကန်သော ဓါတ်ပုံမဟုတ်ပါ။',
    'This is not a valid IP address.' => '၎င်းသည်တရားဝင် IP လိပ်စာမဟုတ်ပါ။',
    'This value is not a valid language.' => 'ဤတန်ဖိုးသည် မှန်ကန်သောဘာသာစကားမဟုတ်ပါ။',
    'This value is not a valid locale.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောဘာသာပြန်မဟုတ်ပါ။',
    'This value is not a valid country.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောနိုင်ငံမဟုတ်ပါ။',
    'This value is already used.' => 'ဤတန်ဖိုးသည် အသုံးပြုပြီးသားဖြစ်သည်။',
    'The size of the image could not be detected.' => 'ဓါတ်ပုံအရွယ်အစားကိုရှာမတွေ့ပါ။',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'ပုံ၏အလျားသည် ကြီးလွန်းသည် ({{ width }}px)။ ခွင့်ပြုထားသည့်အများဆုံးအလျားသည် {{max_width}}px ဖြစ်သည်။',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'ပုံ၏အလျားသည် သေးလွန်းသည် ({{ width }}px)။ ခွင့်ပြုထားသည့်အနည်းဆုံးအလျားသည် {{max_width}}px ဖြစ်သည်။',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ပုံ၏အနံသည် ကြီးလွန်းသည် ({{ height }}px)။ ခွင့်ပြုထားသည့်အများဆုံးအနံသည် {{max_height}}px ဖြစ်သည်။',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ပုံ၏အနံသည် သေးလွန်းသည် ({{ height }}px)။ ခွင့်ပြုထားသည့်အနည်းဆုံးအနံသည် {{min_height}}px ဖြစ်သည်။',
    'This value should be the user\'s current password.' => 'ဤတန်ဖိုးသည်အသုံးပြုသူ၏ လက်ရှိစကားဝှက်ဖြစ်သင့်သည်။',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'ဤတန်ဖိုးသည်စာလုံး {{limit}} အတိအကျရှိသင့်သည်။',
    'The file was only partially uploaded.' => 'ဤဖိုင်သည်တစ်စိတ်တစ်ပိုင်းသာ upload တင်ခဲ့သည်။',
    'No file was uploaded.' => 'မည်သည့် ဖိုင်မျှ upload မလုပ်ခဲ့ပါ။',
    'No temporary folder was configured in php.ini.' => 'php.ini တွင်ယာယီဖိုင်တွဲကိုပြင်ဆင်ထားခြင်းမရှိပါ၊',
    'Cannot write temporary file to disk.' => 'ယာရီဖိုင်ကို disk မရေးနိုင်ပါ။',
    'A PHP extension caused the upload to fail.' => 'PHP extension တစ်ခုကြောင့် upload တင်၍မရနိုင်ပါ။',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'ဤ collection တွင် {{limit}} element (သို့မဟုတ်) ထို့ထက်မပိုသင့်ပါ။',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'ဤ collection တွင် {{limit}} element (သို့မဟုတ်) ၎င်းထက်နည်းသင့်သည်။',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'ဤစုစည်းမှုတွင် {{limit}} element အတိအကျပါသင့်သည်။',
    'Invalid card number.' => 'ကဒ်နံပါတ်မမှန်ပါ။',
    'Unsupported card type or invalid card number.' => 'ကဒ်အမျိုးအစားမမှန်ပါ (သို့မဟုတ်) ကဒ်နံပါတ်မမှန်ပါ။',
    'This is not a valid International Bank Account Number (IBAN).' => 'ဤတန်ဖိုးသည် တရား၀င်နိုင်ငံတကာဘဏ်အကောင့်နံပါတ် (International Bank Account Number, IBAN) မဟုတ်ပါ။',
    'This value is not a valid ISBN-10.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော ISBN-10 တန်ဖိုးမဟုတ်ပါ၊',
    'This value is not a valid ISBN-13.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော ISBN-13 တန်ဖိုးမဟုတ်ပါ၊',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် ISBN-10 (သို့မဟုတ်) ISBN-13 တန်ဖိုးမဟုတ်ပါ၊',
    'This value is not a valid ISSN.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် ISSN တန်ဖိုးမဟုတ်ပါ။',
    'This value is not a valid currency.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် ငွေကြေးတန်ဖိုးမဟုတ်ပါ။',
    'This value should be equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} နှင့်ညီသင့်သည်။',
    'This value should be greater than {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက်ကြီးသင့်သည်။',
    'This value should be greater than or equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက်ကြီးသင့်သည် (သို့မဟုတ်) ဤတန်ဖိုးသည် {{ compared_value }} ညီသင့်သည်။ ',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value_type }} {{ compared_value }} နှင့်ထပ်တူညီမျှသင့်သည်။',
    'This value should be less than {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက်မနဲသောတဲ့ တန်ဖိုးဖြစ်သင့်သည်။',
    'This value should be less than or equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက် မနည်းသောတန်ဖိုး (သို့မဟုတ်) ညီမျှသောတန်ဖိုးဖြစ်သင့်သည်။',
    'This value should not be equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} နှင့်မညီသင့်ပါ။',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value_type }} {{ compared_value }} နှင့်ထပ်တူမညီမျှသင့်သည်။',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'ဤဓာတ်ပုံအချိုးအစားသည်အလွန်ကြီးလွန်းသည်။ ({{ ratio }})။ ခွင့်ပြုထားသောဓာတ်ပုံအချိုးအသားသည် {{ max_ratio }} ဖြစ်သည်။',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'ဤဓာတ်ပုံအချိုးအစားသည်အလွန်သေးလွန်းသည်။ ({{ ratio }})။ ခွင့်ပြုထားသောဓာတ်ပုံအချိုးအသားသည် {{ min_ratio }} ဖြစ်သည်။',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'ဤဓာတ်ပုံသည် စတုရန်းဖြစ်နေသည် ({{ width }}x{{ height }}px)။ စတုရန်းဓာတ်ပုံများကို ခွင့်မပြုပါ။',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'ဤဓာတ်ပုံသည် အလျှားလိုက်ဖြစ်နေသည် ({{ width }}x{{ height }}px). အလျှားလိုက်ဓာတ်ပုံများခွင့်မပြုပါ။',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'ဤဓာတ်ပုံသည် ဒေါင်လိုက်ဖြစ်နေသည် ({{ width }}x{{ height }}px). ဒေါင်လိုက်ဓာတ်ပုံများခွင့်မပြုပါ။',
    'An empty file is not allowed.' => 'ဖိုင်အလွတ်ကိုတင်ခွင့်မပြုပါ။',
    'The host could not be resolved.' => 'host ဖြေရှင်း၍မနိုင်ပါ။',
    'This value does not match the expected {{ charset }} charset.' => 'ဤတန်ဖိုးသည် မျှော်မှန်းထားသော {{ charset }} စားလုံးနှင့် ကိုက်ညီမှုမရှိပါ။',
    'This is not a valid Business Identifier Code (BIC).' => '၎င်းသည်မှန်ကန်သော Business Identifier Code (BIC) မဟုတ်ပါ။',
    'Error' => 'အမှား',
    'This is not a valid UUID.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် UUID မဟုတ်ပါ။',
    'This value should be a multiple of {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{compared_value}} ၏ စတူတန်ဖိုးဖြစ်သင့်သည်။',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'ဤ Business Identifier Code (BIC) သည် IBAN {{ iban }} နှင့်ဆက်စပ်မှုမရှိပါ။',
    'This value should be valid JSON.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် JSON တန်ဖိုးဖြစ်သင့်သည်။',
    'This collection should contain only unique elements.' => 'ဤ collection ကိုယ်ပိုင် elements များ ပါသင့်သည်။',
    'This value should be positive.' => 'ဤတန်ဖိုးသည် အပေါင်းဖြစ်သင့်သည်။',
    'This value should be either positive or zero.' => 'ဤတန်ဖိုးသည် အပေါင်း (သို့မဟုတ်) သုည ဖြစ်သင့်သည်။',
    'This value should be negative.' => 'ဤတန်ဖိုးသည် အနုတ် ဖြစ်သင့်သည်။',
    'This value should be either negative or zero.' => 'ဤတန်ဖိုးသည် အနုတ် (သို့မဟုတ်) သုည ဖြစ်သင့်သည်။',
    'This value is not a valid timezone.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော အချိန်ဇုန်မဟုတ်ပါ။',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'ဤစကားဝှက် သည် ဒေတာပေါက်ကြားမှုတစ်ခုဖြစ်ခဲ့သည်။ ဤစကား၀ှက်ကိုအသုံးမပြုရပါ။  ကျေးဇူးပြု၍ အခြားစကားဝှက်ကိုသုံးပါ။',
    'This value should be between {{ min }} and {{ max }}.' => 'ဤတန်ဖိုးသည် {{ min }} နှင့် {{ max }} ကြားရှိသင့်သည်။',
    'This value is not a valid hostname.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် hostname မဟုတ်ပါ။',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'ဤ collection တွင်ပါပါ၀င်သော elements အရေအတွက်သည် {{ compared_value }} ၏ စတူဖြစ်သင့်သည်။ ',
    'This value should satisfy at least one of the following constraints:' => 'ဤတန်ဖိုးသည် အောက်ပါကန့်သတ်ချက်များအနက်မှအနည်းဆုံးတစ်ခု ဖြည့်ဆည်းပေးသင့်သည်။',
    'Each element of this collection should satisfy its own set of constraints.' => 'ဤ collection ၏ element တစ်ခုစီသည်၎င်း၏ကိုယ်ပိုင်ကန့်သတ်ချက်များကိုဖြည့်ဆည်းသင့်သည်။',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် အပြည်ပြည်ဆိုင်ရာငွေချေးသက်သေခံနံပါတ် ,International Securities Identification Number (ISIN) မဟုတ်ပါ။',
    'This value should be a valid expression.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောစကားရပ်ဖြစ်သင့်သည်။',
  ),
));

$catalogueDefault = new MessageCatalogue('default', array (
));
$catalogue->addFallbackCatalogue($catalogueDefault);

return $catalogue;
