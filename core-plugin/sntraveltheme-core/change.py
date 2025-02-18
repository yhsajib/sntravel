import os

folder_path = "C:\Program Files\Ampps\www\sntravel\wp-content\plugins\sntraveltheme-core"  # Change this to your folder path

for filename in os.listdir(folder_path):
    if "pxl" in filename:
        new_filename = filename.replace("pxl", "sntravel")
        old_path = os.path.join(folder_path, filename)
        new_path = os.path.join(folder_path, new_filename)
        os.rename(old_path, new_path)

print("Renaming completed!")
