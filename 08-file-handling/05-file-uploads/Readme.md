# File Upload 
File uploads are a critical feature in web development, often used for handling user-provided files like images, documents, or videos.

## Key Concept: 
 1. <b>HTML Form for file upload:</b>
  - Use the enctype="multipart/form-data" attribute in the <form> tag.
  - The form must use the POST method.
 2. <b>PHP `$_FILES` Superglobal:</b>
  -PHP handles uploaded files via the $_FILES array, which contains information about the uploaded file:
    - `$_FILES['input_name']['name']`: Original file name.
    - `$_FILES['input_name']['tmp_name']`: Temporary file location on the server.
    - `$_FILES['input_name']['size']`: File size in bytes.
    - `$_FILES['input_name']['type']`: MIME type of the file.
    - `$_FILES['input_name']['error']`: Error code.
 3. <b>Moving Upload Files:</b>
  - Use `move_uploaded_file()` to move the file from the temporary directory to the desired location.