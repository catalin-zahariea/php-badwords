<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <main>
        
        <?php
        // Filter input by query
        $filter = $_GET['filter'];

        // Default paragraph
        $myString = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        
        // Filtering default paragraph 
        $filteredString = str_replace( $filter, "***", $myString );
        ?>
        
        <h1>What is Lorem Ipsum</h1>

        // Printing filtered paragraph.
        <p>
            <?php echo $filteredString; ?>
        </p>

        // Printing paragraph length.
        <p>
            <?php echo "Paragraph length: " . strlen($filteredString) ?>
        </p>

    </main>

</body>
</html>