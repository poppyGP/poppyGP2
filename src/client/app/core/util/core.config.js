(function() {
  'use strict';

  angular
    .module('poppygp.core')
    .config(config);

  /** @ngInject */
  function config($logProvider, $sceDelegateProvider, toastrConfig) {


    // Enable Logging
    // ------------------------------

    $logProvider.debugEnabled(true);


    // Whitelist Embed URLs
    // ------------------------------

    $sceDelegateProvider.resourceUrlWhitelist([
      'self',
      'https://ustream.tv/embed/**',
      'http://ustream.tv/embed/**',
      'http://www.ustream.tv/embed/**',
      'https://www.ustream.tv/embed/**',
      'http://kiwiirc.com/client/**',
      'https://kiwiirc.com/client/**',
      'http://www.kiwiirc.com/client/**',
      'https://www.kiwiirc.com/client/**'
    ]);


    // Configure Toastr
    // ------------------------------

    toastrConfig.allowHtml = true;
    toastrConfig.timeOut = 3000;
    toastrConfig.positionClass = 'toast-bottom-left';
    toastrConfig.preventDuplicates = true;
    toastrConfig.progressBar = true;
    
  }

})();
