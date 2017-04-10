//
//{block name="backend/emotion/view/detail/elements/base"}
//{$smarty.block.parent}
Ext.define('Shopware.apps.Emotion.view.detail.elements.ShareUrLoc', {

    /**
     * Extend from the base class for the grid elements.
     */
    extend: 'Shopware.apps.Emotion.view.detail.elements.Base',

    /**
     * Create the alias matching with the xtype you defined for your element.
     * The pattern is always 'widget.detail-element-' + xtype
     */
    alias: 'widget.detail-element-emotion-components-shareurloc',

    /**
     * You can define an additional CSS class which will be used for the grid element.
     */
    componentCls: 'emotion--shareurloc',

    /**
     * Define the path to an image for the icon of your element.
     * You could also use a base64 string.
     */
    icon: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAvFJREFUeNpkk99LHFcUxz93ZnYdf+uaXSS2MX0IUSStCbSx9B9oJKTSPgRKX7R/QB8S8paQx9IIgYRA30op4oNJoS2lpFRMQkkMWlRcH0IbY7Qx3V2VVXfdnZ83Z0Y3BHqWmbnsvd9zvud7vleN/Hr20dGTHaeNIMDSIaaWL6GsNUo7EOxhKY0RBiSVok4lZD8gYWiWF7Znra5TmYHA91GAfv1S+AJuMprpa/mEdPIoTlBkpTTJVjWLqZL4gebYu83vW4EslGSuAaPwtU+blebTziukrCPUorf1HA/zX7O6c1eY1EkSECIKHRWuPZIjkAQfpb6Iwa4uM1v8gZyTxSDBB+mvaLAy0mQQnzeiqqEsHKEcPVVdEUYWXXYv2/5LpjZuMFW4zr38NTkVig4tpOzjUsSLGVthJJj8BlPDNKpGnlXm6a7rYW7nN8peniazna76frobTu/Xk/AicQ+YW67QfSv5DgONH8ebttHAwu7vtFuHGExfiv8LU1/G9KMouEvkKovCJCllZTqmjCXvvWR2bwqXKlPFcbKlB8LgLs+duRhUA6NLzOVGZcQOnrS5puplxLLt4TO+cZP/Wlb4UJT+2Xkqo9Lc37zF553fYBmpGP99cYxfwhIv7D5WlU1BEhvR5Cxl0Gq1sLg3STqR4bDdz3LF58fCGqNbP8XgSe9vRtyn3LF7mDY7WJfqnsBFA9gWL2y6sFqpsli+zUhmiJF/p8UQipm2LOc7Nvm2/Cda3GmoSPbw9eDNJ8PvXZ0u+SyVfdYdRXZ7mTMdA9SZNotbc9iZTtbNMo/dVRwB+Afq18IqBuw70IjcKGMyElxeGWOi9yLJMOSBkeMP54mMTok/ZF+/CY8EjmysDmwcfwx2wyonGrv5ru8Cn7UPUA29A5PXoubbKIG1b479ExETg2rgMLP7DzmvyDM3LyKb/wPGYQorJob+oqf9FK5PfDvk2uK7NIhRmnUS9XaK+qZW9uS6lwRckRbCqI2o5Wxu/pUAAwClwkB+c5U3cAAAAABJRU5ErkJggg==',

});
//{/block}