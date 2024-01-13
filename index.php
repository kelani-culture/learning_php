<?php
    declare(strict_types=1);
    $books = [
        [

            'name' => 'On Androids Dream of Electric Sheep',
            'releaseYear' => 2009,
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'https://www.amazon.com/Androids-Dream-Electric-Sheep-inspiration/dp/0345404475/ref=sr_1_1?crid=2BCJ6B7N0XE6U&dib=eyJ2IjoiMSJ9.L76C8YxeLuguTy3iyontZjAweXDcfN14yFfi_pPYn6fxvBMNbFKTlZhLZte4ncyjI4azrV66EtZ0ZoC2fQrT_oG9TmgVtAuXLep9debSgOusyD1AnDtu4uSfLuhCuh6CxiI0SpmMOlj2oIbT2ebjQg.nyo-troZevUSAWllwZZec4SRMbXvr_hyuj3-BhCUvjk&dib_tag=se&keywords=do+androids+dream+of+electric+sheep&qid=1705079501&s=books&sprefix=Do+and%2Cstripbooks-intl-ship%2C366&sr=1-1'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'https://www.amazon.com/Project-Hail-Mary/dp/B08GB58KD5/ref=sr_1_1?crid=8EGCR6ZC1845&dib=eyJ2IjoiMSJ9.uiV2f4PxnYUEUh7_cDUqYLkjvyohoGYU1tScw4zp2dbrdOj1GD3igUZh62-Vh8IVQSl34WtF7xZe6FbQQzvOt-13t5p4JBY2Q99XZCpZiggsp28lBzyqgJED7xFDiaxI-myeqTyRl1KrvR4PGVZFfg.heosVm-xcmA9g8MGGqokGKLOOpcofqF0_Kq2TUI_-8g&dib_tag=se&keywords=project+hail+mary&qid=1705079558&s=books&sprefix=pro%2Cstripbooks-intl-ship%2C510&sr=1-1'
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'https://www.amazon.com/Project-Hail-Mary/dp/B08GB58KD5/ref=sr_1_1?crid=8EGCR6ZC1845&dib=eyJ2IjoiMSJ9.uiV2f4PxnYUEUh7_cDUqYLkjvyohoGYU1tScw4zp2dbrdOj1GD3igUZh62-Vh8IVQSl34WtF7xZe6FbQQzvOt-13t5p4JBY2Q99XZCpZiggsp28lBzyqgJED7xFDiaxI-myeqTyRl1KrvR4PGVZFfg.heosVm-xcmA9g8MGGqokGKLOOpcofqF0_Kq2TUI_-8g&dib_tag=se&keywords=project+hail+mary&qid=1705079558&s=books&sprefix=pro%2Cstripbooks-intl-ship%2C510&sr=1-1'
        ]
        ];
        function filter_books(array $books, string $author): array {
            $filtered_books = [];

            foreach($books as $book):
                if ($book['author'] === $author):
                    $filtered_books[] = $book;
                endif;
            endforeach;
            return $filtered_books;
        }

require_once "index.view.php";