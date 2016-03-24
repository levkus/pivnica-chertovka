<?php require_once( 'couch/cms.php' ); ?>

<cms:template title="Меню кухни" clonable='1' nested_pages="1">
  <cms:repeatable name="kitchen_position" label="Позиции Меню">
    <cms:editable
      name="kitchen_item_picture"
      label="Фотография"
      type="image"
      width="400"
      show_preview='1'
      preview_width='100'
      input_width="100"
      col_width="140"
    />
    <cms:editable name="kitchen_item_title" label="Наименование" type="text"/>
    <cms:editable name="kitchen_item_content" label="Описание" type="textarea"/>
    <cms:editable name="kitchen_item_weight" label="Вес" type="text" col_width="50"/>
    <cms:editable name="kitchen_item_price" label="Цена" type="text" col_width="50"/>
  </cms:repeatable>
</cms:template>

<?php COUCH::invoke(); ?>
