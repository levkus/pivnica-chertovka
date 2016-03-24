<?php require_once( 'couch/cms.php' ); ?>

<cms:template title="Карта бара" clonable='1' nested_pages="1">
  <cms:repeatable name="bar_position" label="Напитки">
    <cms:editable
      name="bar_item_picture"
      label="Логотип / Фото"
      type="image"
      width="400"
      show_preview='1'
      preview_width='100'
      input_width="100"
      col_width="140"
    />
    <cms:editable name="bar_item_title" label="Наименование" type="text"/>
    <cms:editable name="bar_item_content" label="Описание" type="textarea"/>
    <cms:editable name="bar_item_volume" label="Объем (мл)" type="text" col_width="50"/>
    <cms:editable name="bar_item_price" label="Цена (р.)" type="text" col_width="50"/>
  </cms:repeatable>
</cms:template>

<?php COUCH::invoke(); ?>
