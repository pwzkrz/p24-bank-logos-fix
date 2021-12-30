# p24-bank-logos-fix

This super simple plugin is a temporaty fix for anyone having problems with displaying aviable payment methods.

For some reason Przelewy24 plugin seems to put invalid links for css styling of the grid but puts the correct url in the `data-bg` attribute.

This plugin uses javascript by using the link drom `data-bg` attribute and replacing any existing styling with `background-image: url(proper-link)`
