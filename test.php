<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSAP Scroll Video Animation</title>

    <!-- GSAP & ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 200vh; /* Just for scrolling effect */
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f5;
        }
        .containerFull {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
        }
        video {
            width: 60%;
            transition: width 0.5s ease;
        }
    </style>
</head>
<body>

    <section>
        <div class="containerFull">
            <video id="video" controls
                src="https://videocdn.cdnpk.net/videos/6a9badbb-a5d0-5820-bfdb-1a02a6fbdc37/horizontal/previews/watermarked/large.mp4">
            </video>
        </div>
    </section>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        gsap.to("#video", {
            width: "100%", // Expands to full width
            scrollTrigger: {
                trigger: "#video",
                start: "top 80%", // When video reaches 80% of the viewport
                end: "top 50%",
                scrub: true, // Smooth scaling effect
                onEnter: () => document.getElementById("video").play(), // Play video when it enters
                onLeaveBack: () => document.getElementById("video").pause(), // Pause when scrolling back up
            }
        });
    </script>

</body>
</html>
