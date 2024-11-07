BenToolsTwigExtensions
==========

Some helpful twig extensions.

> [!IMPORTANT]  
> This repository is no longer maintained and may be removed in a near future. You may consider forking it.

Installation
---------
```
composer install bentools/twig-extensions
```

TypeOfExtension
---------
Provides basic PHP functions allowing to work with a variable type.

```twig
{# Filters #}
{{ value | typeOf }}
{{ value | getType }}

{# Functions #}
{% if get_type(value) == 'array' %}
    ...    
{% endif %}

{% if is_bool(value) %}
    ...    
{% endif %}

{% if is_string(value) %}
    ...    
{% endif %}

{% if is_numeric(value) %}
    ...    
{% endif %}

{% if is_int(value) %}
    ...    
{% endif %}

{% if is_float(value) %}
    ...    
{% endif %}

{% if is_null(value) %}
    ...    
{% endif %}

{% if is_array(value) %}
    ...    
{% endif %}

{% if is_object(value) %}
    ...    
{% endif %}

{% if is_scalar(value) %}
    ...    
{% endif %}

{% if is_callable(value) %}
    ...
{% endif %}
```
