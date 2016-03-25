<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Галерея' clonable='1' gallery='1'>
    <cms:editable
        name="gg_image"
        label="Фотография"
        width="800"
        height="600"
        show_preview='1'
        preview_height='200'
        type="image"
    />
    <cms:editable
        name="gg_thumb"
        assoc_field="gg_image"
        label="Предпросмотр"
        width="115"
        height="115"
        enforce_max='1'
        type="thumbnail"
    />
    <cms:editable
        name="show_on_homepage"
        label="Опции"
        opt_values="Показывать на главной странице=0"
        type="checkbox"
    />
</cms:template>

<?php COUCH::invoke(); ?>
