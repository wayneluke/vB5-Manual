<?php

$template="---
title: ~title~
slug: ~title_slug~
taxonomy:
    category:
        - settings
    tag:
        - options
        - ~group~
visible: false
template: article
version: ~version~
date: ~date~
---

~content~

";

$contentItem="<section class='option'>
~image~
~title~
~description~
~help~
~additionalinfo~

- ~type~
- ~defaultvalue~
</section>";

$contentImage="![~caption~](~imageurl~){.option_image}";
