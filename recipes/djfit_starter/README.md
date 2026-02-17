# DJ Fit Starter Recipe

A fork of the Drupal CMS Starter recipe that uses the **DJ Fit** theme instead of Mercury.

## What it does

- Installs the same modules as drupal_cms_starter (admin UI, anti-spam, authentication, media, etc.)
- Installs and sets **djfit** as the default theme
- Configures Canvas page regions (header, footer) with DJ Fit components
- Creates a Home canvas page with CTA and button components

## Installation

The DJ Fit Starter recipe is set as the default site template in the Drupal CMS installer. When you run a fresh install:

1. **Web installer**: Choose "DJ Fit Starter" (or it will be selected by default)
2. **Drush**: `drush site:install drupal_cms_installer -y`
3. **Core script**: `php web/core/scripts/drupal install drupal_cms_installer`

## Requirements

- The **djfit** theme must exist in `web/themes/djfit/`
- CVA module (installed automatically)

## Customization

After install, customize the DJ Fit theme in `web/themes/djfit/` and use the Figma-to-Drupal design token workflow documented in `.cursor/rules/figma-drupal-design-tokens.mdc`.
