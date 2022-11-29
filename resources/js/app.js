import './bootstrap';
import 'tw-elements';

let placeholder = document.getElementById('youtube-placeholder');
if (placeholder) {
    let id = placeholder.getAttribute('data-id');
    let thumbnail = document.createElement('img');
    thumbnail.src = 'https://img.youtube.com/vi/' + id + '/hqdefault.jpg';
    thumbnail.alt = 'YouTube Thumbnail';
    placeholder.appendChild(thumbnail);
    placeholder.addEventListener('click', function () {
        let iframe = document.createElement('iframe');
        iframe.src = 'https://www.youtube.com/embed/' + id + '?autoplay=1';
        iframe.frameborder = '0';
        iframe.allowFullscreen = true;
        iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
        placeholder.innerHTML = '';
        placeholder.appendChild(iframe);
    })
}

