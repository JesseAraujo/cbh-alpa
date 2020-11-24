var randomicAtomic = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
  $('input[type=text]').attr('autocomplete',randomicAtomic);