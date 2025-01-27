# **Laravel CRUD Application with Image Upload**

## **Overview**
This project is a simple yet professional **CRUD (Create, Read, Update, Delete)** application built using **Laravel**. It enables users to manage posts with functionalities like adding, editing, deleting, and viewing posts. Additionally, the application features an **image upload system**, allowing users to upload and preview images. Uploaded images are stored in the `public/images` directory, making them easily accessible for display on the web interface.

---

## **Features**

### 1. **Add New Post**
- Users can create new posts by filling out a form with the following fields:
  - **Name**: The title of the post.
  - **Description**: A brief description of the post.
  - **Image Upload**: Upload an image for the post.
- Includes **real-time validation** to ensure users provide valid data.

### 2. **Edit Post**
- Users can update the details of an existing post.
- The **current image** is displayed as a preview, allowing users to view it before uploading a new one.
- All fields, including the image, can be updated seamlessly.

### 3. **View Posts**
- Displays all posts in a clean and responsive **table format**.
- Each post includes:
  - **ID**: The unique identifier of the post.
  - **Name**: Title of the post.
  - **Description**: Brief details about the post.
  - **Image**: A thumbnail of the uploaded image.
  - **Actions**: Buttons for editing or deleting posts.

### 4. **Delete Post**
- Users can delete posts effortlessly with a button click.
- A **confirmation prompt** ensures accidental deletions are avoided.

### 5. **Image Upload and Preview**
- Uploaded images are stored in the `public/images` directory.
- On the **edit page**, users can:
  - Preview the currently uploaded image.
  - Upload a new image, replacing the existing one.

### 6. **Pagination**
- Posts are displayed with **pagination**, enhancing navigation and performance for large datasets.

---

## **File Structure**
- **`resources/views`**: Blade templates for the application's front-end.
- **`public/images`**: Directory for storing uploaded images.
- **`routes/web.php`**: Defines routes for CRUD operations.
- **`app/Http/Controllers`**: Contains the logic for managing posts.

---

