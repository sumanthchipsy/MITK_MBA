const params = new URLSearchParams(window.location.search);
const slug = params.get("slug");

fetch("assets/data/blogs.json")
    .then(res => res.json())
    .then(blogs => {
        const blog = blogs.find(b => b.slug === slug);
        if (!blog) {
            document.getElementById("title").innerText = "Blog Not Found";
            document.getElementById("content").innerHTML = "<p>The blog you're looking for does not exist.</p>";
            return;
        }

        // Set title and content
        document.getElementById("title").innerText = blog.title;
        document.getElementById("content").innerHTML = blog.content;

        // Add image gallery
        const gallery = document.getElementById("gallery");
        if (blog.images && blog.images.length > 0) {
            blog.images.forEach(src => {
                const img = document.createElement("img");
                img.src = src;
                img.alt = blog.title;
                img.style = "width: 100%; max-width: 600px; margin-bottom: 1rem;";
                gallery.appendChild(img);
            });
        }

        const videos = document.getElementById("video");
        // Add videos if available
        if (blog.videos && blog.videos.length > 0) {
            blog.videos.forEach(src => {
                const video = document.createElement("video");
                video.src = src;
                video.controls = true;
                video.style = "width: 100%; max-width: 600px; margin-bottom: 1.5rem;";
                videos.appendChild(video);
            });
        }
    })
    .catch(error => {
        console.error("Error loading blog:", error);
        document.getElementById("title").innerText = "Error";
        document.getElementById("content").innerHTML = "<p>There was a problem loading this blog.</p>";
    });














