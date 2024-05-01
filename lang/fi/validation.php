<?php

declare(strict_types=1);

return [
    'accepted'             => 'Kenttä :attribute tulee hyväksyä.',
    'accepted_if'          => ':Attribute on hyväksyttävä, kun :other on :value.',
    'active_url'           => 'Kentän :attribute tulee olla kelvollinen URL-osoite.',
    'after'                => 'Kentän :attribute päiväyksen tulee olla jälkeen :date.',
    'after_or_equal'       => 'Kentän :attribute päiväyksen tulee olla sama ja jälkeen :date',
    'alpha'                => 'Kenttä :attribute voi sisältää vain kirjaimia.',
    'alpha_dash'           => 'Kenttä :attribute voi sisältää vain kirjaimia, numeroita ja viivoja.',
    'alpha_num'            => 'Kenttä :attribute voi sisältää vain kirjaimia ja numeroita.',
    'array'                => 'Kenttä :attribute tulee olla taulukko.',
    'ascii'                => ':Attribute saa sisältää vain yksitavuisia aakkosnumeerisia merkkejä ja symboleja.',
    'before'               => 'Kentän :attribute päiväyksen tulee olla ennen :date.',
    'before_or_equal'      => 'Kentän :attribute päiväyksen tulee olla sama tai ennen kuin :date.',
    'between'              => [
        'array'   => 'Kentän :attribute tulee sisältää välillä :min - :max arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla :min - :max kilotavua.',
        'numeric' => 'Kentän :attribute tulee olla välillä :min - :max.',
        'string'  => 'Kentän :attribute tulee olla :min - :max merkkiä pitkä.',
    ],
    'boolean'              => 'Kentän :attribute arvon tulee olla tosi tai epätosi.',
    'can'                  => ':Attribute-kenttä sisältää luvattoman arvon.',
    'confirmed'            => 'Kentän :attribute vahvistus ei täsmää.',
    'current_password'     => 'Salasana on väärä.',
    'date'                 => 'Kentän :attribute arvo ei ole kelvollinen päivämäärä.',
    'date_equals'          => ':Attribute on oltava sama päivämäärä kuin :date.',
    'date_format'          => 'Kentän :attribute arvo ei vastaa muotoa :format.',
    'decimal'              => ':Attribute:ssa on oltava :decimal desimaalin tarkkuutta.',
    'declined'             => ':Attribute on hylättävä.',
    'declined_if'          => ':Attribute on hylättävä, kun :other on :value.',
    'different'            => 'Kenttien :attribute ja :other tulee olla eriarvoisia.',
    'digits'               => 'Kentän :attribute arvon on oltava :digits numeroa.',
    'digits_between'       => 'Kentän :attribute arvon tulee olla :min - :max numeroa.',
    'dimensions'           => 'Kentän :attribute kuvalla on virheelliset mitat.',
    'distinct'             => 'Kentän :attribute arvo ei ole uniikki.',
    'doesnt_end_with'      => ':Attribute ei saa päättyä johonkin seuraavista: :values.',
    'doesnt_start_with'    => ':Attribute ei voi alkaa jollakin seuraavista: :values.',
    'email'                => 'Kentän :attribute arvo ei ole validi sähköpostiosoite.',
    'ends_with'            => ':Attribute:n on päätyttävä johonkin seuraavista: :values.',
    'enum'                 => 'Valittu :attribute on virheellinen.',
    'exists'               => 'Kentän :attribute valittu arvo on virheellinen.',
    'extensions'           => ':attribute-kentässä on oltava jokin seuraavista tunnisteista: :values.',
    'file'                 => 'Kentän :attribute arvon tulee olla tiedosto.',
    'filled'               => 'Kenttä :attribute on pakollinen.',
    'gt'                   => [
        'array'   => 'Kentän :attribute tulee sisältää enemmän kuin :value arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla suurempi kuin :value kilotavua.',
        'numeric' => 'Kentän :attribute arvo tulee olla suurempi kuin :value.',
        'string'  => 'Kentän :attribute arvo tulee olla pidempi kuin :value merkkiä.',
    ],
    'gte'                  => [
        'array'   => 'Kentän :attribute tulee sisältää :value arvoa tai enemmän.',
        'file'    => 'Tiedoston :attribute tulee olla suurempi tai yhtäsuuri kuin :value kilotavua.',
        'numeric' => 'Kentän :attribute arvo tulee olla suurempi tai yhtäsuuri kuin :value.',
        'string'  => 'Kentän :attribute arvo tulee olla pidempi tai yhtä pitkä kuin :value merkkiä.',
    ],
    'hex_color'            => ':attribute-kentän on oltava kelvollinen heksadesimaaliväri.',
    'image'                => 'Kentän :attribute arvon tulee olla kuva.',
    'in'                   => 'Kentän :attribute arvo on virheellinen.',
    'in_array'             => 'Kentän :attribute arvo ei sisälly kentän :other arvoon.',
    'integer'              => 'Kentän :attribute arvon tulee olla numero.',
    'ip'                   => 'Kentän :attribute arvon tulee olla validi IP-osoite.',
    'ipv4'                 => 'Kentän :attribute arvon tulee olla validi IPv4-osoite.',
    'ipv6'                 => 'Kentän :attribute arvon tulee olla validi IPv6-osoite.',
    'json'                 => 'Kentän :attribute arvon tulee olla validia JSON:ia.',
    'list'                 => ':attribute-kentän on oltava luettelo.',
    'lowercase'            => ':Attribute on oltava pieniä kirjaimia.',
    'lt'                   => [
        'array'   => 'Kentän :attribute tulee sisältää vähemmän kuin :value arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla pienempi kuin :value kilotavua.',
        'numeric' => 'Kentän :attribute arvo tulee olla pienempi kuin :value.',
        'string'  => 'Kentän :attribute arvo tulee olla lyhyempi kuin :value merkkiä.',
    ],
    'lte'                  => [
        'array'   => 'Kentän :attribute tulee sisältää :value arvoa tai vähemmän.',
        'file'    => 'Tiedoston :attribute tulee olla pienempi tai yhtäsuuri kuin :value kilotavua.',
        'numeric' => 'Kentän :attribute arvo tulee olla pienempi tai yhtäsuuri kuin :value.',
        'string'  => 'Kentän :attribute arvo tulee olla lyhyempi tai yhtä pitkä kuin :value merkkiä.',
    ],
    'mac_address'          => ':Attribute:n on oltava kelvollinen MAC-osoite.',
    'max'                  => [
        'array'   => 'Kentän :attribute ei tule sisältää enempää kuin :max arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla enintään :max kilobittiä.',
        'numeric' => 'Kentän arvon :attribute tulee olla enintään :max.',
        'string'  => 'Kentän :attribute arvon tulee olla enintään :max merkkiä pitkä.',
    ],
    'max_digits'           => ':Attribute:ssa saa olla enintään :max numeroa.',
    'mimes'                => 'Kentän :attribute arvon tulee olla tiedostotyyppiä: :values.',
    'mimetypes'            => 'Kentän :attribute arvon tulee olla tiedostotyyppiä: :values.',
    'min'                  => [
        'array'   => 'Kentän :attribute tulee sisältää vähintään :min arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla vähintään :min kilobittiä.',
        'numeric' => 'Kentän :attribute arvon tulee olla vähintään :min.',
        'string'  => 'Kentän :attribute arvon tulee olla vähintään :min merkkiä.',
    ],
    'min_digits'           => ':Attribute:ssa on oltava vähintään :min numeroa.',
    'missing'              => ':Attribute-kenttä puuttuu.',
    'missing_if'           => ':Attribute-kentän täytyy puuttua, kun :other on :value.',
    'missing_unless'       => ':Attribute-kentän täytyy puuttua, ellei :other ole :value.',
    'missing_with'         => ':Attribute-kentän täytyy puuttua, kun :values on käytössä.',
    'missing_with_all'     => ':Attribute-kentän täytyy puuttua, kun :values on läsnä.',
    'multiple_of'          => ':Attribute on oltava :value:n kerrannainen.',
    'not_in'               => 'Kentän :attribute arvo on virheellinen.',
    'not_regex'            => 'Kentän :attribute formaatti on virheellinen.',
    'numeric'              => 'Kentän :attribute arvon tulee olla numero.',
    'password'             => [
        'letters'       => ':Attribute:ssa on oltava vähintään yksi kirjain.',
        'mixed'         => ':Attribute:ssa on oltava vähintään yksi iso ja yksi pieni kirjain.',
        'numbers'       => ':Attribute:ssa on oltava vähintään yksi numero.',
        'symbols'       => ':Attribute:ssa on oltava vähintään yksi symboli.',
        'uncompromised' => 'Annettu :attribute on ilmestynyt tietovuotoon. Valitse toinen :attribute.',
    ],
    'present'              => 'Kenttä :attribute vaaditaan.',
    'present_if'           => ':attribute-kentän on oltava läsnä, kun :other on :value.',
    'present_unless'       => 'Kentän :attribute on oltava läsnä, ellei :other ole :value.',
    'present_with'         => 'Kentän :attribute on oltava läsnä, kun :values on läsnä.',
    'present_with_all'     => 'Kentän :attribute on oltava läsnä, kun :values on läsnä.',
    'prohibited'           => ':Attribute-kenttä on kielletty.',
    'prohibited_if'        => ':Attribute-kenttä on kielletty, kun :other on :value.',
    'prohibited_unless'    => ':Attribute-kenttä on kielletty, ellei :other ole kohteessa :values.',
    'prohibits'            => ':Attribute-kenttä estää :other:n läsnäolon.',
    'regex'                => 'Kentän :attribute arvo on väärää muotoa.',
    'required'             => 'Kenttä :attribute vaaditaan.',
    'required_array_keys'  => ':Attribute-kentässä on oltava merkinnät: :values.',
    'required_if'          => 'Kenttä :attribute vaaditaan kun :other on :value.',
    'required_if_accepted' => ':Attribute-kenttä on pakollinen, kun :other hyväksytään.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless'      => 'Kenttä :attribute vaaditaan jos :other ei sisälly arvoihin :values.',
    'required_with'        => 'Kenttä :attribute vaaditaan kun arvo :values on annettu.',
    'required_with_all'    => 'Kenttä :attribute vaaditaan kun arvo :values on annettu.',
    'required_without'     => 'Kenttä :attribute vaaditaan kun arvoa :values ei ole annettu.',
    'required_without_all' => 'Kenttä :attribute vaaditaan kun mitään arvoista :values ei ole annettu.',
    'same'                 => 'Kenttien :attribute ja :other on oltava samanarvoiset.',
    'size'                 => [
        'array'   => 'Kentän :attribute tulee sisältää :size arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla kokoa :size kilobittiä.',
        'numeric' => 'Kentän :attribute arvon tulee olla kokoa :size.',
        'string'  => 'Kentän :attribute arvon tulee olla kokoa :size merkkiä.',
    ],
    'starts_with'          => 'Attribuutin :attribute tulee alkaa yhdellä seuraavista: :values',
    'string'               => 'Kentän :attribute arvon tulee olla tekstiä.',
    'timezone'             => 'Kentän :attribute arvon tulee olla validi aikavyöhyketunniste.',
    'ulid'                 => ':Attribute:n on oltava kelvollinen ULID.',
    'unique'               => 'Kentän :attribute arvo ei ole uniikki.',
    'uploaded'             => 'Tiedoston :attribute lataus epäonnistui.',
    'uppercase'            => ':Attribute on oltava isoilla kirjaimilla.',
    'url'                  => 'Kentän :attribute arvon tulee olla validi URL-osoite.',
    'uuid'                 => ':Attribute tulee olla kelvollinen UUID.',
    'attributes'           => [
        'address'                  => 'osoite',
        'affiliate_url'            => 'kumppanin URL-osoite',
        'age'                      => 'ikä',
        'amount'                   => 'määrä',
        'announcement'             => 'ilmoitus',
        'area'                     => 'alueella',
        'audience_prize'           => 'yleisöpalkinto',
        'available'                => 'saatavilla',
        'birthday'                 => 'syntymäpäivä',
        'body'                     => 'kehon',
        'city'                     => 'kaupunki',
        'compilation'              => 'kokoelma',
        'concept'                  => 'konsepti',
        'conditions'               => 'ehdot',
        'content'                  => 'sisältö',
        'country'                  => 'maa',
        'cover'                    => 'peite',
        'created_at'               => 'luotu klo',
        'creator'                  => 'luoja',
        'currency'                 => 'valuutta',
        'current_password'         => 'Nykyinen salasana',
        'customer'                 => 'asiakas',
        'date'                     => 'Päivämäärä',
        'date_of_birth'            => 'syntymäaika',
        'dates'                    => 'päivämäärät',
        'day'                      => 'päivä',
        'deleted_at'               => 'poistettu klo',
        'description'              => 'kuvaus',
        'display_type'             => 'näytön tyyppi',
        'district'                 => 'kaupunginosa',
        'duration'                 => 'kesto',
        'email'                    => 'sähköposti',
        'excerpt'                  => 'ote',
        'filter'                   => 'suodattaa',
        'finished_at'              => 'päättyi klo',
        'first_name'               => 'etunimi',
        'gender'                   => 'sukupuoli',
        'grand_prize'              => 'pääpalkinto',
        'group'                    => 'ryhmä',
        'hour'                     => 'tunnin',
        'image'                    => 'kuva',
        'image_desktop'            => 'työpöydän kuva',
        'image_main'               => 'pääkuva',
        'image_mobile'             => 'mobiilikuva',
        'images'                   => 'kuvia',
        'is_audience_winner'       => 'on yleisövoittaja',
        'is_hidden'                => 'on piilotettu',
        'is_subscribed'            => 'on tilattu',
        'is_visible'               => 'on näkyvissä',
        'is_winner'                => 'on voittaja',
        'items'                    => 'kohteita',
        'key'                      => 'avain',
        'last_name'                => 'sukunimi',
        'lesson'                   => 'oppitunti',
        'line_address_1'           => 'rivin osoite 1',
        'line_address_2'           => 'rivin osoite 2',
        'login'                    => 'Kirjaudu sisään',
        'message'                  => 'viesti',
        'middle_name'              => 'toinen nimi',
        'minute'                   => 'minuutti',
        'mobile'                   => 'mobiili',
        'month'                    => 'kuukausi',
        'name'                     => 'nimi',
        'national_code'            => 'kansallinen koodi',
        'number'                   => 'määrä',
        'password'                 => 'Salasana',
        'password_confirmation'    => 'salasanan vahvistus',
        'phone'                    => 'puhelin',
        'photo'                    => 'kuva',
        'portfolio'                => 'portfolio',
        'postal_code'              => 'postinumero',
        'preview'                  => 'esikatselu',
        'price'                    => 'hinta',
        'product_id'               => 'Tuotetunnus',
        'product_uid'              => 'tuotteen UID',
        'product_uuid'             => 'tuotteen UUID',
        'promo_code'               => 'Tarjouskoodi',
        'province'                 => 'maakunnassa',
        'quantity'                 => 'määrä',
        'reason'                   => 'syy',
        'recaptcha_response_field' => 'recaptcha-vastauskenttä',
        'referee'                  => 'tuomari',
        'referees'                 => 'erotuomarit',
        'reject_reason'            => 'hylätä syy',
        'remember'                 => 'muistaa',
        'restored_at'              => 'kunnostettu klo',
        'result_text_under_image'  => 'tulosteksti kuvan alla',
        'role'                     => 'rooli',
        'rule'                     => 'sääntö',
        'rules'                    => 'säännöt',
        'second'                   => 'toinen',
        'sex'                      => 'seksiä',
        'shipment'                 => 'lähetys',
        'short_text'               => 'lyhyt teksti',
        'size'                     => 'koko',
        'skills'                   => 'taidot',
        'slug'                     => 'etana',
        'specialization'           => 'erikoistuminen',
        'started_at'               => 'alkoi klo',
        'state'                    => 'osavaltio',
        'status'                   => 'Tila',
        'street'                   => 'katu',
        'student'                  => 'opiskelija-',
        'subject'                  => 'aihe',
        'tag'                      => 'tag',
        'tags'                     => 'tunnisteet',
        'teacher'                  => 'opettaja',
        'terms'                    => 'ehdot',
        'test_description'         => 'testin kuvaus',
        'test_locale'              => 'testaa aluetta',
        'test_name'                => 'testin nimi',
        'text'                     => 'teksti',
        'time'                     => 'aika',
        'title'                    => 'otsikko',
        'type'                     => 'tyyppi',
        'updated_at'               => 'päivitetty klo',
        'user'                     => 'käyttäjä',
        'username'                 => 'käyttäjätunnus',
        'value'                    => 'arvo',
        'year'                     => 'vuosi',
    ],
];
