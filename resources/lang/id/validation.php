<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    
    'accepted' => 'Kolom :attribute harus diterima.',
    'active_url' => 'Kolom :attribute bukan URL yang valid.',
    'after' => 'Kolom :attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => 'Kolom :attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => 'Kolom :attribute hanya boleh mengandung huruf.',
    'alpha_dash' => 'Kolom :attribute hanya boleh mengandung huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => 'Kolom :attribute hanya boleh mengandung huruf dan angka.',
    'array' => 'Kolom :attribute harus berupa array.',
    'before' => 'Kolom :attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => 'Kolom :attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => 'Kolom :attribute harus di antara :min dan :max.',
        'file' => 'Kolom :attribute harus di antara :min dan :max kilobyte.',
        'string' => 'Kolom :attribute harus di antara :min dan :max karakter.',
        'array' => 'Kolom :attribute harus memiliki antara :min dan :max item.',
    ],
    'boolean' => 'Kolom :attribute harus bernilai true atau false.',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'date' => 'Kolom :attribute bukan tanggal yang valid.',
    'date_equals' => 'Kolom :attribute harus tanggal yang sama dengan :date.',
    'date_format' => 'Kolom :attribute tidak cocok dengan format :format.',
    'different' => 'Kolom :attribute dan :other harus berbeda.',
    'digits' => 'Kolom :attribute harus terdiri dari :digits digit.',
    'digits_between' => 'Kolom :attribute harus di antara :min dan :max digit.',
    'dimensions' => 'Kolom :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Kolom :attribute memiliki nilai duplikat.',
    'email' => 'Kolom :attribute harus berupa alamat email yang valid.',
    'ends_with' => 'Kolom :attribute harus diakhiri dengan salah satu dari berikut: :values.',
    'exists' => 'Pilihan :attribute yang dipilih tidak valid.',
    'file' => 'Kolom :attribute harus berupa file.',
    'filled' => 'Kolom :attribute harus memiliki nilai.',
    'gt' => [
        'numeric' => 'Kolom :attribute harus lebih besar dari :value.',
        'file' => 'Kolom :attribute harus lebih besar dari :value kilobyte.',
        'string' => 'Kolom :attribute harus lebih besar dari :value karakter.',
        'array' => 'Kolom :attribute harus memiliki lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => 'Kolom :attribute harus lebih besar dari atau sama dengan :value.',
        'file' => 'Kolom :attribute harus lebih besar dari atau sama dengan :value kilobyte.',
        'string' => 'Kolom :attribute harus lebih besar dari atau sama dengan :value karakter.',
        'array' => 'Kolom :attribute harus memiliki :value item atau lebih.',
    ],
    'image' => 'Kolom :attribute harus berupa gambar.',
    'in' => 'Pilihan :attribute yang dipilih tidak valid.',
    'in_array' => 'Kolom :attribute tidak ada di :other.',
    'integer' => 'Kolom :attribute harus berupa integer.',
    'ip' => 'Kolom :attribute harus berupa alamat IP yang valid.',
    'ipv4' => 'Kolom :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Kolom :attribute harus berupa alamat IPv6 yang valid.',
    'json' => 'Kolom :attribute harus berupa string JSON yang valid.',
    'lt' => [
        'numeric' => 'Kolom :attribute harus kurang dari :value.',
        'file' => 'Kolom :attribute harus kurang dari :value kilobyte.',
        'string' => 'Kolom :attribute harus kurang dari :value karakter.',
        'array' => 'Kolom :attribute harus memiliki kurang dari :value item.',
    ],
    'lte' => [
        'numeric' => 'Kolom :attribute harus kurang dari atau sama dengan :value.',
        'file' => 'Kolom :attribute harus kurang dari atau sama dengan :value kilobyte.',
        'string' => 'Kolom :attribute harus kurang dari atau sama dengan :value karakter.',
        'array' => 'Kolom :attribute tidak boleh memiliki lebih dari :value item.',
    ],
    'max' => [
        'numeric' => 'Kolom :attribute tidak boleh lebih dari :max.',
        'file' => 'Kolom :attribute tidak boleh lebih dari :max kilobyte.',
        'string' => 'Kolom :attribute tidak boleh lebih dari :max karakter.',
        'array' => 'Kolom :attribute tidak boleh memiliki lebih dari :max item.',
    ],
    'mimes' => 'Kolom :attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => 'Kolom :attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'numeric' => 'Kolom :attribute harus setidaknya :min.',
        'file' => 'Kolom :attribute harus setidaknya :min kilobyte.',
        'string' => 'Kolom :attribute harus setidaknya :min karakter.',
        'array' => 'Kolom :attribute harus memiliki setidaknya :min item.',
    ],
    'not_in' => 'Pilihan :attribute yang dipilih tidak valid.',
    'not_regex' => 'Format :attribute tidak valid.',
    'numeric' => 'Kolom :attribute harus berupa angka.',
    'password' => 'Kata sandi tidak benar.',
    'present' => 'Kolom :attribute harus ada.',
    'regex' => 'Format :attribute tidak valid.',
    'required' => 'Kolom :attribute harus diisi.',
    'required_if' => 'Kolom :attribute harus diisi jika :other adalah :value.',
    'required_unless' => 'Kolom :attribute harus diisi kecuali :other ada di :values.',
    'required_with' => 'Kolom :attribute harus diisi ketika :values ada.',
    'required_with_all' => 'Kolom :attribute harus diisi ketika :values ada.',
    'required_without' => 'Kolom :attribute harus diisi ketika :values tidak ada.',
    'required_without_all' => 'Kolom :attribute harus diisi ketika tidak ada dari :values yang ada.',
    'same' => 'Kolom :attribute dan :other harus cocok.',
    'size' => [
        'numeric' => 'Kolom :attribute harus :size.',
        'file' => 'Kolom :attribute harus :size kilobyte.',
        'string' => 'Kolom :attribute harus :size karakter.',
        'array' => 'Kolom :attribute harus mengandung :size item.',
    ],
    'starts_with' => 'Kolom :attribute harus dimulai dengan salah satu dari berikut: :values.',
    'string' => 'Kolom :attribute harus berupa string.',
    'timezone' => 'Kolom :attribute harus merupakan zona yang valid.',
    'unique' => 'Kolom :attribute sudah ada yang menggunakan.',
    'uploaded' => 'Kolom :attribute gagal diunggah.',
    'url' => 'Format :attribute tidak valid (masukan berupa URL).',
    'uuid' => 'Kolom :attribute harus berupa UUID yang valid.',  

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'is_active' => 'status aktif',
        'nama_agenda' => 'nama agenda',
        'berapa_hari' => 'berapa hari',
        'tgl' => 'tanggal',
        'tgl_mulai' => 'tanggal mulai',
        'tgl_selesai' => 'tanggal selesai',
        'jam_mulai' => 'jam mulai',
        'jam_selesai' => 'jam selesai',
        'nama_file' => 'nama file',
        'id_tahun' => 'tahun',
        'jml1pa' => 'jumlah kelas 1 putra',
        'jml1pi' => 'jumlah kelas 1 putri',
        'jml2pa' => 'jumlah kelas 2 putra',
        'jml2pi' => 'jumlah kelas 2 putri',
        'jml3pa' => 'jumlah kelas 3 putra',
        'jml3pi' => 'jumlah kelas 3 putri',
        'nama_siswa' => 'nama siswa',
        'nama_guru' => 'nama guru',
        'jml_l' => 'jumlah laki-laki',
        'jml_p' => 'jumlah perempuan',
        'nama_ekstrakurikuler' => 'nama ekstrakurikuler',
        'id_album' => 'album',
        'tmp_lahir' => 'tempat lahir',
        'tgl_lahir' => 'tanggal lahir',
        'jk' => 'jenis kelamin',
        'statuspeg' => 'status pegawai',
        'statusguru' => 'status guru',
        'mapel' => 'mata pelajaran',
        'alokasi' => 'alokasi waktu',
        'no_urut' => 'no urut',
        'nama_web' => 'nama sekolah / madrasah',
        'meta_description' => 'meta description',
        'meta_keyword' => 'meta keyword',
        'nama_kepsek' => 'nama kepsek / kamad',
        'nama_operator' => 'nama operator',
        'logo_web' => 'logo website',
        'logo_admin' => 'logo admin',
        'id_kurikulum' => 'mata pelajaran',
        'rata' => 'rata rata',
        'struktur' => 'struktur organisasi',
        'password1' => 'password',
        'password2' => 'ulang password',
        'password3' => 'password lama',
        'th_lulus' => 'tahun lulus',
    ],

];