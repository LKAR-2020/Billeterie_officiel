<?php

declare(strict_types=1);

return [
    'accepted'             => 'Το πεδίο :attribute πρέπει να γίνει αποδεκτό.',
    'accepted_if'          => 'Το :attribute πρέπει να γίνει αποδεκτό όταν το :other είναι :value.',
    'active_url'           => 'Το πεδίο :attribute δεν είναι αποδεκτή διεύθυνση URL.',
    'after'                => 'Το πεδίο :attribute πρέπει να είναι μία ημερομηνία μετά από :date.',
    'after_or_equal'       => 'Το πεδίο :attribute πρέπει να είναι μία ημερομηνία ίδια ή μετά από :date.',
    'alpha'                => 'Το πεδίο :attribute μπορεί να περιέχει μόνο γράμματα.',
    'alpha_dash'           => 'Το πεδίο :attribute μπορεί να περιέχει μόνο γράμματα, αριθμούς, και παύλες.',
    'alpha_num'            => 'Το πεδίο :attribute μπορεί να περιέχει μόνο γράμματα και αριθμούς.',
    'array'                => 'Το πεδίο :attribute πρέπει να είναι ένας πίνακας.',
    'ascii'                => 'Το :attribute πρέπει να περιέχει μόνο αλφαριθμητικούς χαρακτήρες και σύμβολα ενός byte.',
    'before'               => 'Το πεδίο :attribute πρέπει να είναι μία ημερομηνία πριν από :date.',
    'before_or_equal'      => 'Το πεδίο :attribute πρέπει να είναι μία ημερομηνία ίδια ή πριν από :date.',
    'between'              => [
        'array'   => 'Το πεδίο :attribute πρέπει να έχει μεταξύ :min - :max αντικείμενα.',
        'file'    => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min - :max kilobytes.',
        'numeric' => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min - :max.',
        'string'  => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min - :max χαρακτήρες.',
    ],
    'boolean'              => 'Το πεδίο :attribute πρέπει να είναι true ή false.',
    'can'                  => 'Το πεδίο :attribute περιέχει μια μη εξουσιοδοτημένη τιμή.',
    'confirmed'            => 'Η επιβεβαίωση του :attribute δεν ταιριάζει.',
    'current_password'     => 'Ο κωδικός πρόσβασης είναι λανθασμένος.',
    'date'                 => 'Το πεδίο :attribute δεν είναι έγκυρη ημερομηνία.',
    'date_equals'          => 'Το στοιχείο :attribute πρέπει να είναι μια ημερομηνία, όπως η εξής :date.',
    'date_format'          => 'Το πεδίο :attribute δεν είναι της μορφής :format.',
    'decimal'              => 'Το :attribute πρέπει να έχει :decimal ​​δεκαδικά ψηφία.',
    'declined'             => 'Τα :attribute πρέπει να απορριφθούν.',
    'declined_if'          => 'Το :attribute πρέπει να απορριφθεί όταν το :other είναι :value.',
    'different'            => 'Το πεδίο :attribute και :other πρέπει να είναι διαφορετικά.',
    'digits'               => 'Το πεδίο :attribute πρέπει να είναι :digits ψηφία.',
    'digits_between'       => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max ψηφία.',
    'dimensions'           => 'Το πεδίο :attribute περιέχει μη έγκυρες διαστάσεις εικόνας.',
    'distinct'             => 'Το πεδίο :attribute περιέχει δύο φορές την ίδια τιμή.',
    'doesnt_end_with'      => 'Το :attribute δεν μπορεί να τελειώνει με ένα από τα ακόλουθα: :values.',
    'doesnt_start_with'    => 'Το :attribute δεν μπορεί να ξεκινά με ένα από τα ακόλουθα: :values.',
    'email'                => 'Το πεδίο :attribute πρέπει να είναι μία έγκυρη διεύθυνση email.',
    'ends_with'            => 'Το πεδίο :attribute πρέπει να τελειώνει με ένα από τα παρακάτω: :values.',
    'enum'                 => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'exists'               => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'extensions'           => 'Το πεδίο :attribute πρέπει να έχει μία από τις ακόλουθες επεκτάσεις: :values.',
    'file'                 => 'Το πεδίο :attribute πρέπει να είναι αρχείο.',
    'filled'               => 'To πεδίο :attribute είναι απαραίτητο.',
    'gt'                   => [
        'array'   => 'To πεδίο :attribute πρέπει να έχει περισσότερα από :value αντικείμενα.',
        'file'    => 'To πεδίο :attribute πρέπει να είναι μεγαλύτερο από :value kilobytes.',
        'numeric' => 'To πεδίο :attribute πρέπει να είναι μεγαλύτερο από :value.',
        'string'  => 'To πεδίο :attribute πρέπει να είναι μεγαλύτερο από :value χαρακτήρες.',
    ],
    'gte'                  => [
        'array'   => 'To πεδίο :attribute πρέπει να έχει :value αντικείμενα ή περισσότερα.',
        'file'    => 'To πεδίο :attribute πρέπει να είναι μεγαλύτερο ή ίσο από :value kilobytes.',
        'numeric' => 'To πεδίο :attribute πρέπει να είναι μεγαλύτερο ή ίσο από :value.',
        'string'  => 'To πεδίο :attribute πρέπει να είναι μεγαλύτερο ή ίσο από :value χαρακτήρες.',
    ],
    'hex_color'            => 'Το πεδίο :attribute πρέπει να είναι έγκυρο δεκαεξαδικό χρώμα.',
    'image'                => 'Το πεδίο :attribute πρέπει να είναι εικόνα.',
    'in'                   => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'in_array'             => 'Το πεδίο :attribute δεν υπάρχει σε :other.',
    'integer'              => 'Το πεδίο :attribute πρέπει να είναι ακέραιος.',
    'ip'                   => 'Το πεδίο :attribute πρέπει να είναι μία έγκυρη διεύθυνση IP.',
    'ipv4'                 => 'Το πεδίο :attribute πρέπει να είναι μία έγκυρη διεύθυνση IPv4.',
    'ipv6'                 => 'Το πεδίο :attribute πρέπει να είναι μία έγκυρη διεύθυνση IPv6.',
    'json'                 => 'Το πεδίο :attribute πρέπει να είναι μία έγκυρη συμβολοσειρά JSON.',
    'list'                 => 'Το πεδίο :attribute πρέπει να είναι λίστα.',
    'lowercase'            => 'Το :attribute πρέπει να είναι πεζό.',
    'lt'                   => [
        'array'   => 'To πεδίο :attribute πρέπει να έχει λιγότερα από :value αντικείμενα.',
        'file'    => 'To πεδίο :attribute πρέπει να είναι μικρότερo από :value kilobytes.',
        'numeric' => 'To πεδίο :attribute πρέπει να είναι μικρότερo από :value.',
        'string'  => 'To πεδίο :attribute πρέπει να είναι μικρότερo από :value χαρακτήρες.',
    ],
    'lte'                  => [
        'array'   => 'To πεδίο :attribute δεν πρέπει να υπερβαίνει τα :value αντικείμενα.',
        'file'    => 'To πεδίο :attribute πρέπει να είναι μικρότερo ή ίσο από  :value kilobytes.',
        'numeric' => 'To πεδίο :attribute πρέπει να είναι μικρότερo ή ίσο από :value.',
        'string'  => 'To πεδίο :attribute πρέπει να είναι μικρότερo ή ίσο από  :value χαρακτήρες.',
    ],
    'mac_address'          => 'Το :attribute πρέπει να είναι έγκυρη διεύθυνση MAC.',
    'max'                  => [
        'array'   => 'Το πεδίο :attribute δεν μπορεί να έχει περισσότερα από :max αντικείμενα.',
        'file'    => 'Το πεδίο :attribute δεν μπορεί να είναι μεγαλύτερό :max kilobytes.',
        'numeric' => 'Το πεδίο :attribute δεν μπορεί να είναι μεγαλύτερο από :max.',
        'string'  => 'Το πεδίο :attribute δεν μπορεί να έχει περισσότερους από :max χαρακτήρες.',
    ],
    'max_digits'           => 'Το :attribute δεν πρέπει να έχει περισσότερα από :max ψηφία.',
    'mimes'                => 'Το πεδίο :attribute πρέπει να είναι αρχείο τύπου: :values.',
    'mimetypes'            => 'Το πεδίο :attribute πρέπει να είναι αρχείο τύπου: :values.',
    'min'                  => [
        'array'   => 'Το πεδίο :attribute πρέπει να έχει τουλάχιστον :min αντικείμενα.',
        'file'    => 'Το πεδίο :attribute πρέπει να είναι τουλάχιστον :min kilobytes.',
        'numeric' => 'Το πεδίο :attribute πρέπει να είναι τουλάχιστον :min.',
        'string'  => 'Το πεδίο :attribute πρέπει να έχει τουλάχιστον :min χαρακτήρες.',
    ],
    'min_digits'           => 'Το :attribute πρέπει να έχει τουλάχιστον :min ψηφία.',
    'missing'              => 'Το πεδίο :attribute πρέπει να λείπει.',
    'missing_if'           => 'Το πεδίο :attribute πρέπει να λείπει όταν το :other είναι :value.',
    'missing_unless'       => 'Το πεδίο :attribute πρέπει να λείπει εκτός αν το :other είναι :value.',
    'missing_with'         => 'Το πεδίο :attribute πρέπει να λείπει όταν υπάρχουν :values.',
    'missing_with_all'     => 'Το πεδίο :attribute πρέπει να λείπει όταν υπάρχουν :values.',
    'multiple_of'          => 'Το :attribute πρέπει να είναι πολλαπλάσιο του :value',
    'not_in'               => 'Το επιλεγμένο :attribute δεν είναι αποδεκτό.',
    'not_regex'            => 'Η μορφή του πεδίου :attribute δεν είναι αποδεκτή.',
    'numeric'              => 'Το πεδίο :attribute πρέπει να είναι αριθμός.',
    'password'             => [
        'letters'       => 'Το :attribute πρέπει να περιέχει τουλάχιστον ένα γράμμα.',
        'mixed'         => 'Το :attribute πρέπει να περιέχει τουλάχιστον ένα κεφαλαίο και ένα πεζό γράμμα.',
        'numbers'       => 'Το :attribute πρέπει να περιέχει τουλάχιστον έναν αριθμό.',
        'symbols'       => 'Το :attribute πρέπει να περιέχει τουλάχιστον ένα σύμβολο.',
        'uncompromised' => 'Το δεδομένο :attribute εμφανίστηκε σε μια διαρροή δεδομένων. Επιλέξτε ένα διαφορετικό :attribute.',
    ],
    'present'              => 'Το πεδίο :attribute πρέπει να υπάρχει.',
    'present_if'           => 'Το πεδίο :attribute πρέπει να υπάρχει όταν το :other είναι :value.',
    'present_unless'       => 'Το πεδίο :attribute πρέπει να υπάρχει εκτός εάν το :other είναι :value.',
    'present_with'         => 'Το πεδίο :attribute πρέπει να υπάρχει όταν υπάρχει :values.',
    'present_with_all'     => 'Το πεδίο :attribute πρέπει να υπάρχει όταν υπάρχουν :values.',
    'prohibited'           => 'Το πεδίο :attribute απαγορεύεται.',
    'prohibited_if'        => 'Το πεδίο :attribute απαγορεύεται όταν το :other είναι :value.',
    'prohibited_unless'    => 'Το πεδίο :attribute απαγορεύεται εκτός αν το :other βρίσκεται στο :values.',
    'prohibits'            => 'Το πεδίο :attribute απαγορεύει στους :other να είναι παρόντες.',
    'regex'                => 'Η μορφή του πεδίου :attribute δεν είναι αποδεκτή.',
    'required'             => 'Το πεδίο :attribute είναι απαραίτητο.',
    'required_array_keys'  => 'Το πεδίο :attribute πρέπει να περιέχει καταχωρήσεις για: :values.',
    'required_if'          => 'Το πεδίο :attribute είναι απαραίτητο όταν το πεδίο :other είναι :value.',
    'required_if_accepted' => 'Το πεδίο :attribute απαιτείται όταν γίνει αποδεκτό το :other.',
    'required_if_declined' => 'Το πεδίο :attribute είναι απαραίτητο όταν δεν γίνει αποδεκτό το πεδίο :other.',
    'required_unless'      => 'Το πεδίο :attribute είναι απαραίτητο εκτός αν το πεδίο :other εμπεριέχει :values.',
    'required_with'        => 'Το πεδίο :attribute είναι απαραίτητο όταν υπάρχει :values.',
    'required_with_all'    => 'Το πεδίο :attribute είναι απαραίτητο όταν υπάρχουν :values.',
    'required_without'     => 'Το πεδίο :attribute είναι απαραίτητο όταν δεν υπάρχει :values.',
    'required_without_all' => 'Το πεδίο :attribute είναι απαραίτητο όταν δεν υπάρχει κανένα από :values.',
    'same'                 => 'Τα πεδία :attribute και :other πρέπει να είναι ίδια.',
    'size'                 => [
        'array'   => 'Το πεδίο :attribute πρέπει να περιέχει :size αντικείμενα.',
        'file'    => 'Το πεδίο :attribute πρέπει να είναι :size kilobytes.',
        'numeric' => 'Το πεδίο :attribute πρέπει να είναι :size.',
        'string'  => 'Το πεδίο :attribute πρέπει να είναι :size χαρακτήρες.',
    ],
    'starts_with'          => 'Το στοιχείο :attribute πρέπει να ξεκινά με ένα από τα παρακάτω: :values',
    'string'               => 'Το πεδίο :attribute πρέπει να είναι αλφαριθμητικό.',
    'timezone'             => 'Το πεδίο :attribute πρέπει να είναι μία έγκυρη ζώνη ώρας.',
    'ulid'                 => 'Το :attribute πρέπει να είναι έγκυρο ULID.',
    'unique'               => 'Το πεδίο :attribute έχει ήδη εκχωρηθεί.',
    'uploaded'             => 'Η μεταφόρτωση του πεδίου :attribute απέτυχε.',
    'uppercase'            => 'Το :attribute πρέπει να είναι κεφαλαίο.',
    'url'                  => 'Το πεδίο :attribute δεν είναι έγκυρη διεύθυνση URL.',
    'uuid'                 => 'Το πεδίο :attribute πρέπει να είναι έγκυρο UUID.',
    'attributes'           => [
        'address'                  => 'διεύθυνση',
        'affiliate_url'            => 'URL συνεργάτη',
        'age'                      => 'ηλικία',
        'amount'                   => 'ποσό',
        'announcement'             => 'ανακοίνωση',
        'area'                     => 'περιοχή',
        'audience_prize'           => 'βραβείο κοινού',
        'available'                => 'διαθέσιμος',
        'birthday'                 => 'γενέθλια',
        'body'                     => 'σώμα',
        'city'                     => 'πόλη',
        'compilation'              => 'συλλογή',
        'concept'                  => 'έννοια',
        'conditions'               => 'συνθήκες',
        'content'                  => 'περιεχόμενο',
        'country'                  => 'χώρα',
        'cover'                    => 'κάλυμμα',
        'created_at'               => 'δημιουργήθηκε στο',
        'creator'                  => 'δημιουργός',
        'currency'                 => 'νόμισμα',
        'current_password'         => 'τρέχον κωδικό πρόσβασης',
        'customer'                 => 'πελάτης',
        'date'                     => 'ημερομηνία',
        'date_of_birth'            => 'Ημερομηνια γεννησης',
        'dates'                    => 'ημερομηνίες',
        'day'                      => 'ημέρα',
        'deleted_at'               => 'διαγράφηκε στο',
        'description'              => 'περιγραφή',
        'display_type'             => 'τύπος οθόνης',
        'district'                 => 'περιοχή',
        'duration'                 => 'διάρκεια',
        'email'                    => 'e-mail',
        'excerpt'                  => 'απόσπασμα',
        'filter'                   => 'φίλτρο',
        'finished_at'              => 'τελείωσε στις',
        'first_name'               => 'όνομα',
        'gender'                   => 'γένος',
        'grand_prize'              => 'μεγαλο επαθλο',
        'group'                    => 'ομάδα',
        'hour'                     => 'ωρα',
        'image'                    => 'εικόνα',
        'image_desktop'            => 'εικόνα επιφάνειας εργασίας',
        'image_main'               => 'κύρια εικόνα',
        'image_mobile'             => 'εικόνα για κινητό',
        'images'                   => 'εικόνες',
        'is_audience_winner'       => 'είναι νικητής του κοινού',
        'is_hidden'                => 'είναι κρυμμένο',
        'is_subscribed'            => 'είναι εγγεγραμμένος',
        'is_visible'               => 'είναι ορατό',
        'is_winner'                => 'είναι νικητής',
        'items'                    => 'είδη',
        'key'                      => 'κλειδί',
        'last_name'                => 'επίθετο',
        'lesson'                   => 'μάθημα',
        'line_address_1'           => 'διεύθυνση γραμμής 1',
        'line_address_2'           => 'διεύθυνση γραμμής 2',
        'login'                    => 'Σύνδεση',
        'message'                  => 'μήνυμα',
        'middle_name'              => 'μεσαίο όνομα',
        'minute'                   => 'λεπτό',
        'mobile'                   => 'κινητό τηλέφωνο',
        'month'                    => 'μήνας',
        'name'                     => 'όνομα',
        'national_code'            => 'εθνικός κωδικός',
        'number'                   => 'αριθμός',
        'password'                 => 'συνθηματικό',
        'password_confirmation'    => 'επιβεβαίωση συνθηματικού',
        'phone'                    => 'τηλέφωνο',
        'photo'                    => 'φωτογραφία',
        'portfolio'                => 'χαρτοφυλάκιο',
        'postal_code'              => 'Ταχυδρομικός Κώδικας',
        'preview'                  => 'προεπισκόπηση',
        'price'                    => 'τιμή',
        'product_id'               => 'αναγνωριστικό προϊόντος',
        'product_uid'              => 'UID προϊόντος',
        'product_uuid'             => 'UUID προϊόντος',
        'promo_code'               => 'κωδικός προσφοράς',
        'province'                 => 'επαρχία',
        'quantity'                 => 'ποσότητα',
        'reason'                   => 'λόγος',
        'recaptcha_response_field' => 'η επαλήθευση recaptcha',
        'referee'                  => 'διαιτητής',
        'referees'                 => 'διαιτητές',
        'reject_reason'            => 'απορρίψτε το λόγο',
        'remember'                 => 'θυμάμαι',
        'restored_at'              => 'αποκαταστάθηκε στο',
        'result_text_under_image'  => 'αποτέλεσμα κειμένου κάτω από την εικόνα',
        'role'                     => 'ρόλος',
        'rule'                     => 'κανόνας',
        'rules'                    => 'κανόνες',
        'second'                   => 'δευτερόλεπτο',
        'sex'                      => 'φύλο',
        'shipment'                 => 'αποστολή',
        'short_text'               => 'σύντομο κείμενο',
        'size'                     => 'μέγεθος',
        'skills'                   => 'δεξιότητες',
        'slug'                     => 'γυμνοσάλιαγκας',
        'specialization'           => 'ειδίκευση',
        'started_at'               => 'ξεκίνησε στις',
        'state'                    => 'κατάσταση',
        'status'                   => 'κατάσταση',
        'street'                   => 'δρόμος',
        'student'                  => 'μαθητης σχολειου',
        'subject'                  => 'θέμα',
        'tag'                      => 'ετικέτα',
        'tags'                     => 'ετικέτες',
        'teacher'                  => 'δάσκαλος',
        'terms'                    => 'όροι',
        'test_description'         => 'περιγραφή δοκιμής',
        'test_locale'              => 'τοποθεσία δοκιμής',
        'test_name'                => 'όνομα δοκιμής',
        'text'                     => 'κείμενο',
        'time'                     => 'χρόνος',
        'title'                    => 'τίτλος',
        'type'                     => 'τύπος',
        'updated_at'               => 'ενημερώθηκε στις',
        'user'                     => 'χρήστης',
        'username'                 => 'όνομα χρήστη',
        'value'                    => 'αξία',
        'year'                     => 'ετος',
    ],
];
