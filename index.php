<?php

$directory = getcwd() . '/../';

$ignore = [
        '.',
    '..',
    '.DS_Store',
    'vendor',
    'x-archive',
    'x-next'
];

$files = array_diff(scandir($directory), $ignore);

?>
<html>
    <head>
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
                            href="http://<?php echo $file ?>.test/"
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