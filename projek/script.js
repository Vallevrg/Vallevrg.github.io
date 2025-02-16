document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".info-section");

    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target); // Stop observing setelah elemen terlihat
                }
            });
        },
        {
            threshold: 0.1, // Elemen dianggap terlihat saat 10% masuk viewport
        }
    );

    sections.forEach(section => {
        observer.observe(section); // Mulai mengamati elemen
    });
});