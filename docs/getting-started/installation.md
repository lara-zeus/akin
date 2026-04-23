---
title: Installation
weight: 1
---

## Prerequisites

This package is built for Laravel and Filament.

## Installation

```bash
composer require lara-zeus/akin
```

## Register Plugin

```php
->plugins([
    \LaraZeus\Akin\AkinTheme::make(),
])
```

## Add Theme CSS

```css
@import '/vendor/lara-zeus/akin/resources/css/theme.css';
```

## Usage

After registration, build your panel theme assets and load the panel.
