//{block name="emotion_components/backend/shareurloc_layout"}
Ext.define('Shopware.apps.Emotion.view.components.fields.ShareUrLocLayout', {
    extend: 'Ext.form.field.ComboBox',
    alias: 'widget.emotion-components-fields-shareurloc_layout',
    name: 'shareurloc_layout',

    /**
     * Snippets for the component
     * @object
     */
    snippets: {
        fields: {
            'shareurloc_layout': '{s name=shareurloc/fields/shareurloc_layout}Layout{/s}',
            'empty_text': '{s name=shareurloc/fields/empty_text}Please select...{/s}'
        },
        store: {
            'option_1': '{s name=shareurloc/store/option_1}Default{/s}',
        }
    },

    /**
     * Initialize the component.
     *
     * @public
     * @return void
     */
    initComponent: function() {
        var me = this;

         Ext.apply(me, {
         emptyText: me.snippets.fields.empty_text,
         fieldLabel: me.snippets.fields.shareurloc_layout,
         displayField: 'display',
         valueField: 'value',
         queryMode: 'local',
         triggerAction: 'all',
         store: me.createStore()
         });
        me.callParent(arguments);
    },

    /**
     * Creates a local store which will be used
     * for the combo box. We don't need that data.
     *
     * @public
     * @return [object] Ext.data.Store
     */
    createStore: function() {
        var me = this, snippets = me.snippets.store;

        return Ext.create('Ext.data.JsonStore', {
            fields: [ 'value', 'display' ],
            data: [{
                value: 'default',
                display: snippets.option_1
            }]
        });
    }
});
//{/block}
//{block name="emotion_components/backend/shareurloc"}
Ext.define('Shopware.apps.Emotion.view.components.ShareUrLoc', {

    /**
     * Extend from the base class for the emotion components
     */
    extend: 'Shopware.apps.Emotion.view.components.Base',

    /**
     * Create the alias matching the xtype you defined in your `createEmotionComponent()` method.
     * The pattern is always 'widget.' + xtype
     */
    alias: 'widget.emotion-components-shareurloc',

    /**
     * The constructor method of each component.
     */
    initComponent: function () {
        var me = this;

        /**
         * Call the original method of the base class.
         */
        me.callParent(arguments);
        /**
         * For example you can register additional event listeners on your fields to handle some data.
         */
    }
});
//{/block}