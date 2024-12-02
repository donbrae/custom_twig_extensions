<?php

namespace Drupal\custom_twig_extensions\TwigExtension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class CustomTwigExtension extends AbstractExtension {

  /**
   * {@inheritdoc}
   */
  public function getFilters() {
    return [
      new TwigFilter('custom_replace', [$this, 'customReplace']),
    ];
  }

  /**
   * Custom replace function.
   *
   * @param string $content
   *   The content to perform replacement on.
   * @param string $pattern
   *   The pattern to search for.
   * @param string $replacement
   *   The replacement string.
   *
   * @return string
   *   The content with replacements made.
   */
  public function customReplace($content, $pattern, $replacement) {
    return preg_replace($pattern, $replacement, $content);
  }

}
