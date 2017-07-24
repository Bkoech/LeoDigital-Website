<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new' => 'Сохранить и новый элемент',
    'save_action_save_and_edit' => 'Сохранить и отредактировать этот элемент',
    'save_action_save_and_back' => 'Сохранить и вернуться',
    'save_action_changed_notification' => 'Изменено поведение по умолчанию после сохранения.',

    // Create form
    'add'                 => 'Добавить',
    'back_to_all'         => 'Вернуться ко всем ',
    'cancel'              => 'Отмена',
    'add_a_new'           => 'Добавить новый ',

    // Edit form
    'edit'                 => 'редактировать',
    'save'                 => 'Сохранить',

    // Revisions
    'revisions'            => 'Изменения',
    'no_revisions'         => 'Изменений не найдено',
    'created_this'          => 'создал это',
    'changed_the'          => 'изменено',
    'restore_this_value'   => 'Восстановить это значение',
    'from'                 => 'из',
    'to'                   => 'к',
    'undo'                 => 'Отменить',
    'revision_restored'    => 'Редакция успешно восстановлена',

    // CRUD table view
    'all'                       => 'Все ',
    'in_the_database'           => 'в базе данных',
    'list'                      => 'Список',
    'actions'                   => 'Действия',
    'preview'                   => 'Предпросмотр',
    'delete'                    => 'Удалить',
    'admin'                     => 'Админ',
    'details_row'               => 'Это строка сведений. Измените, пожалуйста.',
    'details_row_loading_error' => 'При загрузке данных произошла ошибка. Повторите попытку.',

        // Confirmation messages and bubbles
        'delete_confirm'                              => 'Вы уверены, что хотите удалить этот элемент?',
        'delete_confirmation_title'                   => 'Элемент удален',
        'delete_confirmation_message'                 => 'Элемент успешно удален.',
        'delete_confirmation_not_title'               => 'НЕ удалено',
        'delete_confirmation_not_message'             => "Произошла ошибка. Возможно, ваш товар не был удален.",
        'delete_confirmation_not_deleted_title'       => 'Не удалено',
        'delete_confirmation_not_deleted_message'     => 'Ничего не произошло. Ваш запись в безопасности.',

        // DataTables translation
        'emptyTable'     => 'Данные отсутствуют в таблице',
        'info'           => 'Показ _START_ до _END_ из _TOTAL_ записей',
        'infoEmpty'      => 'Показаны с 0 по 0 из 0',
        'infoFiltered'   => '(Отфильтровано из _MAX_ общих записей)',
        'infoPostFix'    => '',
        'thousands'      => ',',
        'lengthMenu'     => '_MENU_ записей на страницу',
        'loadingRecords' => 'Загружается...',
        'processing'     => 'Обработка...',
        'search'         => 'Поиск: ',
        'zeroRecords'    => 'Совпадающих записей не найдено',
        'paginate'       => [
            'first'    => 'Первый',
            'last'     => 'Последний',
            'next'     => 'Следующий',
            'previous' => 'Предыдущий',
        ],
        'aria' => [
            'sortAscending'  => ': активировать для сортировки столбцов по возрастанию',
            'sortDescending' => ': активировать сортировку по убыванию',
        ],

    // global crud - errors
        'unauthorized_access' => 'Несанкционированный доступ - у вас нет необходимых разрешений для просмотра этой страницы.',
        'please_fix' => 'Пожалуйста, исправьте следующие ошибки:',

    // global crud - success / error notification bubbles
        'insert_success' => 'Элемент успешно добавлен.',
        'update_success' => 'Элемент успешно изменен.',

    // CRUD reorder view
        'reorder'                      => 'Изменение порядка',
        'reorder_text'                 => 'Для переупорядочивания используйте drag & drop.',
        'reorder_success_title'        => 'Готово',
        'reorder_success_message'      => 'Ваш порядок сохранен.',
        'reorder_error_title'          => 'Ошибка',
        'reorder_error_message'        => 'Ваш порядок НЕ сохранен.',

    // CRUD yes/no
        'yes' => 'Да',
        'no' => 'Нет',

    // Fields
        'browse_uploads' => 'Просмотр загрузок',
        'clear' => 'Очистить',
        'page_link' => 'Ссылка на страницу',
        'page_link_placeholder' => 'http://example.com/your-desired-page',
        'internal_link' => 'Внутренняя ссылка',
        'internal_link_placeholder' => 'Internal slug. Ex: \'admin/page\' (no quotes) for \':url\'',
        'external_link' => 'Внешняя ссылка',
        'choose_file' => 'Выберите файл',

    //Table field
        'table_cant_add' => 'Cannot add new :entity',
        'table_max_reached' => 'Maximum number of :max reached',

    // File manager
    'file_manager' => 'Файловый менеджер',
];
