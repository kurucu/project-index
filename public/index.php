<?php

// Set your project/site directory here
$directory = getcwd() . '/../../';

// Define some folders to ignore
$ignore = [
        '.',
    '..',
    '.DS_Store',
    'vendor',
    'x-archive',
    'x-next'
];

// Set the protocol to use (prepended to directory name)
$protocol = 'https://';

// Set the TLD to use (appended to directory name)
$tld = '.test/';

// The page title
$title = 'Projects';

// Removes the ignored ones from the directory
$files = array_diff(scandir($directory), $ignore);
?>
<!doctype html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="description" content="A list of your web projects.">
        
        <title><?php echo $title ?></title>
        
        <link href="public.css" rel="stylesheet">
    </head>
    
    <body class="bg-gray-200">
        <div class="container mx-auto mt-24">
        
            <h1 class="text-xl my-6 border-b-2 border-blue-600">
                Projects
            </h1>
            
            <ul class="flex flex-row flex-wrap -mx-2">
                <?php foreach($files as $file){ ?>
                    <li class="px-4 py-2 m-2 block bg-indigo-700 rounded shadow">
                        <a
                            href="<?php echo $protocol . $file . $tld ?>"
                            target="_blank"
                            class="text-white hover:underline"
                        >
                            <?php echo $file ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            
            
            <h1 class="text-lg my-6 border-b border-gray-600">Ignored</h1>
            
            <ul class="flex flex-row flex-wrap -mx-2">
                <?php foreach($ignore as $file){ ?>
                    <li class="px-3 py-1 m-2 block bg-gray-500 rounded shadow text-gray-400 text-xs">
                        <?php echo $file ?>
                    </li>
                <?php } ?>
            </ul>
            
        </div>
    </body>
</html>
