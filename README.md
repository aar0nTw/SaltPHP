# SaltPHP

SaltPHP is a php multiple require tools. 
If you just want to write a simple php script,maybe you don't need to implement the PSR-0 standard, but you also want to require something from a easy way.


##How to use

Demo file tree :

```
demo
├── index.php
└── lib.php
```
And the "index.php" script:

```
<?php
// Filename : index.php

require 'SaltPHP/src/Salt.php';

Salt::need(
   'lib' //Require "lib.php"
);
```
Use other file path:

```
// Filename : index.php

require 'SaltPHP/src/Salt.php';

Salt::basePath(
	'vendor',
	'ext'
)

Salt::need(
   'lib' //Require "lib.php" or "vendor/lib.php" or "ext/lib.php"
);

```

##Contributing to SaltPHP
 
* Check out the latest master to make sure the feature hasn't been implemented or the bug hasn't been fixed yet.
* Check out the issue tracker to make sure someone already hasn't requested it and/or contributed it.
* Fork the project.
* Start a feature/bugfix branch.
* Commit and push until you are happy with your contribution.
* Make sure to add tests for it. This is important so I don't break it in a future version unintentionally.
* Please try not to mess with the Rakefile, version, or history. If you want to have your own version, or is otherwise necessary, that is fine, but please isolate to its own commit so I can cherry-pick around it.

##Copyright

Copyright (c) 2012 aar0ntw. See LICENSE for
further details.
