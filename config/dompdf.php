<?php

return [
    'show_warnings' => false,   // Chỉ thị cảnh báo nếu có lỗi nhỏ

    'public_path' => null,     // Đường dẫn công khai

    'font_dir' => base_path('storage/fonts'), // Đường dẫn tới thư mục phông chữ tùy chỉnh

    'font_cache' => base_path('storage/fonts'), // Đường dẫn tới thư mục bộ nhớ cache phông chữ

    'temp_dir' => base_path('storage/fonts/tmp'), // Đường dẫn tới thư mục tạm thời

    'chroot' => base_path('storage/fonts'),

    'default_media_type' => 'screen',

    'default_paper_size' => 'a4',

    'default_font' => 'dejavu sans',

    'dpi' => 96,

    'default_font_size' => 12,

    'enable_remote' => true,

    'font_height_ratio' => 1.1,

    'is_php_enabled' => false,

    'pdf_backend' => 'CPDF',

    'pdfa' => false,
    
    'pdfx' => false,
];
