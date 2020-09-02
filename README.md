# Restrict States for shipping and billing for Magento 2.3.+

[![N|Solid](https://magestio.com/wp-content/uploads/logo_web_r.png)](https://magestio.com)


### ATTENTION

* When installing, go to Stores > Configuration > Sales > Checkout and mark all states to enable shipping for all states

![Alt text](screenshots/config.png?raw=true "Configured States")
### Characteristics

* Restrict States for store view

### Requirements
* Compatible with Magento 2.3.+
* [Magestio_Core](https://github.com/MagestioEcommerce/core) is required to use any of Magestio extensions.

### Enable extension

```
php bin/magento module:enable Magestio_Core
php bin/magento module:enable Magestio_RestrictStates
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento cache:flush
php bin/magento setup:static-content:deploy
```

### Soporte técnico

* Web: [https://magestio.com/](https://magestio.com/)