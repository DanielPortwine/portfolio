<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script type="text/javascript">
            function callbackThen(response){
                // read Promise object
                response.json().then(function(data) {
                    document.getElementById('contact-submit').disabled = !data.success;
                });
            }
        </script>

        {!! htmlScriptTagJsApi([
            'action' => 'contact',
            'callback_then' => 'callbackThen',
            'callback_catch' => 'callbackCatch',
        ]) !!}

        <link rel="shortcut icon" type="image/x-icon" href="data:image/svg+xml,&lt;svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22&gt;&lt;text y=%22.9em%22 font-size=%2290%22&gt;🐆&lt;/text&gt;&lt;/svg&gt;">

        <style>/* ! tailwindcss v3.2.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.inset-0{top:0px;right:0px;bottom:0px;left:0px}.inset-y-0{top:0px;bottom:0px}.bottom-0{bottom:0px}.right-0{right:0px}.left-0{left:0px}.top-0{top:0px}.z-50{z-index:50}.z-10{z-index:10}.z-0{z-index:0}.order-last{order:9999}.mx-auto{margin-left:auto;margin-right:auto}.-mx-4{margin-left:-1rem;margin-right:-1rem}.mb-3{margin-bottom:0.75rem}.-ml-5{margin-left:-1.25rem}.-mb-2{margin-bottom:-0.5rem}.mt-2{margin-top:0.5rem}.mr-5{margin-right:1.25rem}.mb-16{margin-bottom:4rem}.mb-7{margin-bottom:1.75rem}.mb-5{margin-bottom:1.25rem}.mb-4{margin-bottom:1rem}.mb-8{margin-bottom:2rem}.mt-5{margin-top:1.25rem}.mb-2{margin-bottom:0.5rem}.mt-8{margin-top:2rem}.mr-2{margin-right:0.5rem}.mt-1{margin-top:0.25rem}.mr-3{margin-right:0.75rem}.-ml-4{margin-left:-1rem}.-mr-4{margin-right:-1rem}.mb-10{margin-bottom:2.5rem}.mt-4{margin-top:1rem}.box-border{box-sizing:border-box}.box-content{box-sizing:content-box}.block{display:block}.inline-block{display:inline-block}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.hidden{display:none}.h-full{height:100%}.h-10{height:2.5rem}.h-4{height:1rem}.h-2{height:0.5rem}.h-6{height:1.5rem}.h-56{height:14rem}.h-12{height:3rem}.h-96{height:24rem}.h-5{height:1.25rem}.h-1{height:0.25rem}.h-64{height:16rem}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-10{width:2.5rem}.w-4{width:1rem}.w-auto{width:auto}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.max-w-xl{max-width:36rem}.max-w-lg{max-width:32rem}.max-w-6xl{max-width:72rem}.max-w-3xl{max-width:48rem}.max-w-screen-md{max-width:768px}.translate-x-0{--tw-translate-x:0px;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.-translate-x-1\/2{--tw-translate-x:-50%;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.-translate-y-full{--tw-translate-y:-100%;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.translate-y-0{--tw-translate-y:0px;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.rotate-0{--tw-rotate:0deg;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.transform{transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-pointer{cursor:pointer}.select-none{-webkit-user-select:none;user-select:none}.flex-row{flex-direction:row}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.flex-wrap{flex-wrap:wrap}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-4{gap:1rem}.space-x-4 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1rem * var(--tw-space-x-reverse));margin-left:calc(1rem * calc(1 - var(--tw-space-x-reverse)))}.space-x-5 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1.25rem * var(--tw-space-x-reverse));margin-left:calc(1.25rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-5 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1.25rem * var(--tw-space-y-reverse))}.space-y-4 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1rem * var(--tw-space-y-reverse))}.overflow-hidden{overflow:hidden}.rounded{border-radius:0.25rem}.rounded-md{border-radius:0.375rem}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.border{border-width:1px}.border-gray-800{--tw-border-opacity:1;border-color:rgb(31 41 55 / var(--tw-border-opacity))}.border-green-400{--tw-border-opacity:1;border-color:rgb(74 222 128 / var(--tw-border-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.bg-transparent{background-color:transparent}.bg-green-400{--tw-bg-opacity:1;background-color:rgb(74 222 128 / var(--tw-bg-opacity))}.bg-purple-500{--tw-bg-opacity:1;background-color:rgb(168 85 247 / var(--tw-bg-opacity))}.bg-gray-700{--tw-bg-opacity:1;background-color:rgb(55 65 81 / var(--tw-bg-opacity))}.bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-blue-500{--tw-bg-opacity:1;background-color:rgb(59 130 246 / var(--tw-bg-opacity))}.bg-blue-600{--tw-bg-opacity:1;background-color:rgb(37 99 235 / var(--tw-bg-opacity))}.bg-none{background-image:none}.bg-gradient-to-br{background-image:linear-gradient(to bottom right, var(--tw-gradient-stops))}.from-purple-500{--tw-gradient-from:#a855f7;--tw-gradient-to:rgb(168 85 247 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-indigo-600{--tw-gradient-to:rgb(79 70 229 / 0);--tw-gradient-stops:var(--tw-gradient-from), #4f46e5, var(--tw-gradient-to)}.to-blue-500{--tw-gradient-to:#3b82f6}.fill-current{fill:currentColor}.object-cover{object-fit:cover}.p-10{padding:2.5rem}.p-4{padding:1rem}.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.px-4{padding-left:1rem;padding-right:1rem}.px-0\.5{padding-left:0.125rem;padding-right:0.125rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-20{padding-top:5rem;padding-bottom:5rem}.px-10{padding-left:2.5rem;padding-right:2.5rem}.py-8{padding-top:2rem;padding-bottom:2rem}.px-8{padding-left:2rem;padding-right:2rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-1{padding-left:0.25rem;padding-right:0.25rem}.py-7{padding-top:1.75rem;padding-bottom:1.75rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-0{padding-left:0px;padding-right:0px}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.pb-10{padding-bottom:2.5rem}.pt-2{padding-top:0.5rem}.pl-16{padding-left:4rem}.pr-16{padding-right:4rem}.pt-0{padding-top:0px}.pb-3{padding-bottom:0.75rem}.text-left{text-align:left}.text-center{text-align:center}.font-sans{font-family:ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"}.text-2xl{font-size:1.5rem;line-height:2rem}.text-base{font-size:1rem;line-height:1.5rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-xs{font-size:0.75rem;line-height:1rem}.font-bold{font-weight:700}.font-medium{font-weight:500}.font-semibold{font-weight:600}.font-light{font-weight:300}.uppercase{text-transform:uppercase}.leading-10{line-height:2.5rem}.leading-6{line-height:1.5rem}.leading-tight{line-height:1.25}.tracking-wider{letter-spacing:0.05em}.tracking-tight{letter-spacing:-0.025em}.tracking-wide{letter-spacing:0.025em}.text-gray-200{--tw-text-opacity:1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-red-500{--tw-text-opacity:1;color:rgb(239 68 68 / var(--tw-text-opacity))}.text-indigo-900{--tw-text-opacity:1;color:rgb(49 46 129 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.text-green-400{--tw-text-opacity:1;color:rgb(74 222 128 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-purple-200{--tw-text-opacity:1;color:rgb(233 213 255 / var(--tw-text-opacity))}.text-purple-500{--tw-text-opacity:1;color:rgb(168 85 247 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity:1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-100{--tw-text-opacity:1;color:rgb(243 244 246 / var(--tw-text-opacity))}.text-blue-500{--tw-text-opacity:1;color:rgb(59 130 246 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-800{--tw-text-opacity:1;color:rgb(31 41 55 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.no-underline{-webkit-text-decoration-line:none;text-decoration-line:none}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.opacity-100{opacity:1}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-sm{--tw-shadow:0 1px 2px 0 rgb(0 0 0 / 0.05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-md{--tw-shadow:0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.outline-none{outline:2px solid transparent;outline-offset:2px}.ring-blue-300{--tw-ring-opacity:1;--tw-ring-color:rgb(147 197 253 / var(--tw-ring-opacity))}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.duration-100{transition-duration:100ms}.duration-150{transition-duration:150ms}.duration-200{transition-duration:200ms}.ease-out{transition-timing-function:cubic-bezier(0, 0, 0.2, 1)}.ease-in{transition-timing-function:cubic-bezier(0.4, 0, 1, 1)}.hover\:bg-gray-800:hover{--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.hover\:bg-green-500:hover{--tw-bg-opacity:1;background-color:rgb(34 197 94 / var(--tw-bg-opacity))}.hover\:bg-blue-500:hover{--tw-bg-opacity:1;background-color:rgb(59 130 246 / var(--tw-bg-opacity))}.hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-400:hover{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.focus\:no-underline:focus{-webkit-text-decoration-line:none;text-decoration-line:none}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring-2:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus\:ring:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus\:ring-green-400:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(74 222 128 / var(--tw-ring-opacity))}.focus\:ring-offset-2:focus{--tw-ring-offset-width:2px}.focus\:ring-offset-gray-900:focus{--tw-ring-offset-color:#111827}.active\:bg-blue-700:active{--tw-bg-opacity:1;background-color:rgb(29 78 216 / var(--tw-bg-opacity))}@media (min-width: 640px){.sm\:col-span-2{grid-column:span 2 / span 2}.sm\:mr-4{margin-right:1rem}.sm\:mb-0{margin-bottom:0px}.sm\:w-auto{width:auto}.sm\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.sm\:flex-row{flex-direction:row}.sm\:py-10{padding-top:2.5rem;padding-bottom:2.5rem}.sm\:pr-10{padding-right:2.5rem}.sm\:pt-4{padding-top:1rem}.sm\:text-6xl{font-size:3.75rem;line-height:1}.sm\:text-5xl{font-size:3rem;line-height:1}.sm\:text-xl{font-size:1.25rem;line-height:1.75rem}.sm\:text-4xl{font-size:2.25rem;line-height:2.5rem}.sm\:text-lg{font-size:1.125rem;line-height:1.75rem}.sm\:text-base{font-size:1rem;line-height:1.5rem}.sm\:leading-none{line-height:1}}@media (min-width: 768px){.md\:order-first{order:-9999}.md\:mt-0{margin-top:0px}.md\:mb-16{margin-bottom:4rem}.md\:mt-2{margin-top:0.5rem}.md\:mt-6{margin-top:1.5rem}.md\:block{display:block}.md\:flex{display:flex}.md\:hidden{display:none}.md\:h-96{height:24rem}.md\:w-1\/2{width:50%}.md\:flex-shrink-0{flex-shrink:0}.md\:flex-grow-0{flex-grow:0}.md\:flex-row{flex-direction:row}.md\:justify-between{justify-content:space-between}.md\:px-0{padding-left:0px;padding-right:0px}.md\:py-12{padding-top:3rem;padding-bottom:3rem}.md\:py-16{padding-top:4rem;padding-bottom:4rem}.md\:px-16{padding-left:4rem;padding-right:4rem}.md\:text-left{text-align:left}.md\:text-right{text-align:right}.md\:text-lg{font-size:1.125rem;line-height:1.75rem}.md\:text-3xl{font-size:1.875rem;line-height:2.25rem}.md\:text-base{font-size:1rem;line-height:1.5rem}}@media (min-width: 1024px){.lg\:absolute{position:absolute}.lg\:order-first{order:-9999}.lg\:mx-0{margin-left:0px;margin-right:0px}.lg\:my-40{margin-top:10rem;margin-bottom:10rem}.lg\:-ml-0{margin-left:-0px}.lg\:mb-0{margin-bottom:0px}.lg\:mb-16{margin-bottom:4rem}.lg\:block{display:block}.lg\:h-full{height:100%}.lg\:w-7\/12{width:58.333333%}.lg\:w-1\/2{width:50%}.lg\:max-w-full{max-width:100%}.lg\:max-w-screen-xl{max-width:1280px}.lg\:max-w-lg{max-width:32rem}.lg\:flex-shrink-0{flex-shrink:0}.lg\:flex-grow-0{flex-grow:0}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-row{flex-direction:row}.lg\:flex-col{flex-direction:column}.lg\:space-x-6 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1.5rem * var(--tw-space-x-reverse));margin-left:calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))}.lg\:rounded-none{border-radius:0px}.lg\:rounded-xl{border-radius:0.75rem}.lg\:p-16{padding:4rem}.lg\:px-8{padding-left:2rem;padding-right:2rem}.lg\:px-0{padding-left:0px;padding-right:0px}.lg\:py-0{padding-top:0px;padding-bottom:0px}.lg\:py-16{padding-top:4rem;padding-bottom:4rem}.lg\:px-16{padding-left:4rem;padding-right:4rem}.lg\:pt-0{padding-top:0px}.lg\:pb-0{padding-bottom:0px}.lg\:pr-0{padding-right:0px}.lg\:pr-5{padding-right:1.25rem}.lg\:pr-20{padding-right:5rem}.lg\:pr-12{padding-right:3rem}.lg\:pl-12{padding-left:3rem}.lg\:text-left{text-align:left}.lg\:text-center{text-align:center}.lg\:text-4xl{font-size:2.25rem;line-height:2.5rem}.lg\:text-xl{font-size:1.25rem;line-height:1.75rem}.lg\:text-3xl{font-size:1.875rem;line-height:2.25rem}.lg\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}}@media (min-width: 1280px){.xl\:p-24{padding:6rem}.xl\:px-0{padding-left:0px;padding-right:0px}.xl\:py-20{padding-top:5rem;padding-bottom:5rem}.xl\:text-5xl{font-size:3rem;line-height:1}}</style>    <link rel="stylesheet" href="">
    </head>
<body>
<section class="relative block w-full py-6 leading-10 text-center text-indigo-900 bg-black" data-tails-scripts="//unpkg.com/alpinejs">
    <div class="w-full px-6 mx-auto leading-10 text-center lg:px-8 max-w-7xl">
        <div class="box-border flex flex-wrap items-center justify-between -mx-4 text-indigo-900">

            <div class="relative z-10 flex items-center w-auto px-4 leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
                <a href="#_" class="box-border inline-block font-sans text-2xl font-bold text-left text-white no-underline bg-transparent cursor-pointer focus:no-underline">
                    tails.
                </a>
            </div>

            <div class="absolute left-0 z-0 justify-center hidden w-full px-4 -ml-5 space-x-4 font-medium leading-10 md:flex lg:-ml-0 lg:space-x-6 md:flex-grow-0 md:text-left lg:text-center">
                <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block px-0.5 text-base font-bold text-gray-200 uppercase transition duration-150 ease hover:text-white">
                    <span class="block">Home</span>
                    <span class="absolute bottom-0 left-0 inline-block w-full h-2 -mb-2 overflow-hidden">
                        <span x-show="!hover" class="absolute inset-0 inline-block w-full h-full transform translate-x-0 bg-black" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        <svg class="w-auto h-full text-green-400 fill-current" viewBox="0 0 84 6" xmlns="http://www.w3.org/2000/svg" data-primary="green-400"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g transform="translate(-8)" fill-rule="nonzero"><path d="M90.3.9c-1.8 0-2.8.7-3.6 1.4-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.9 1-1.2 1.5.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9.6 0 1-.4 1-1s-.5-1-1-1z"></path></g></g></svg>
                    </span>
                </a>
                <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block px-0.5 text-base font-bold text-gray-200 uppercase transition duration-150 ease hover:text-white">
                    <span class="block">Features</span>
                    <span class="absolute bottom-0 left-0 inline-block w-full h-2 -mb-2 overflow-hidden">
                        <span x-show="!hover" class="absolute inset-0 inline-block w-full h-full transform translate-x-0 bg-black" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        <svg class="w-auto h-full text-green-400 fill-current" viewBox="0 0 84 6" xmlns="http://www.w3.org/2000/svg" data-primary="green-400"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g transform="translate(-8)" fill-rule="nonzero"><path d="M90.3.9c-1.8 0-2.8.7-3.6 1.4-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.9 1-1.2 1.5.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9.6 0 1-.4 1-1s-.5-1-1-1z"></path></g></g></svg>
                    </span>
                </a>
                <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block px-0.5 text-base font-bold text-gray-200 uppercase transition duration-150 ease hover:text-white">
                    <span class="block">Pricing</span>
                    <span class="absolute bottom-0 left-0 inline-block w-full h-2 -mb-2 overflow-hidden">
                        <span x-show="!hover" class="absolute inset-0 inline-block w-full h-full transform translate-x-0 bg-black" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        <svg class="w-auto h-full text-green-400 fill-current" viewBox="0 0 84 6" xmlns="http://www.w3.org/2000/svg" data-primary="green-400"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g transform="translate(-8)" fill-rule="nonzero"><path d="M90.3.9c-1.8 0-2.8.7-3.6 1.4-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.9 1-1.2 1.5.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9.6 0 1-.4 1-1s-.5-1-1-1z"></path></g></g></svg>
                    </span>
                </a>
                <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block px-0.5 text-base font-bold text-gray-200 uppercase transition duration-150 ease hover:text-white">
                    <span class="block">About</span>
                    <span class="absolute bottom-0 left-0 inline-block w-full h-2 -mb-2 overflow-hidden">
                        <span x-show="!hover" class="absolute inset-0 inline-block w-full h-full transform translate-x-0 bg-black" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        <svg class="w-auto h-full text-green-400 fill-current" viewBox="0 0 84 6" xmlns="http://www.w3.org/2000/svg" data-primary="green-400"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g transform="translate(-8)" fill-rule="nonzero"><path d="M90.3.9c-1.8 0-2.8.7-3.6 1.4-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.9 1-1.2 1.5.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9.6 0 1-.4 1-1s-.5-1-1-1z"></path></g></g></svg>
                    </span>
                </a>
            </div>
            <div class="relative items-center hidden px-4 mt-2 space-x-5 font-medium leading-10 md:flex md:flex-grow-0 md:flex-shrink-0 md:mt-0 md:text-right lg:flex-grow-0 lg:flex-shrink-0">
                <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block px-0.5 text-base font-bold text-gray-200 uppercase transition duration-150 ease hover:text-white">
                    <span class="block">Login</span>
                    <span class="absolute bottom-0 left-0 inline-block w-full h-2 -mb-2 overflow-hidden">
                        <span x-show="!hover" class="absolute inset-0 inline-block w-full h-full transform translate-x-0 bg-black" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        <svg class="w-auto h-full text-green-400 fill-current" viewBox="0 0 84 6" xmlns="http://www.w3.org/2000/svg" data-primary="green-400"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g transform="translate(-8)" fill-rule="nonzero"><path d="M90.3.9c-1.8 0-2.8.7-3.6 1.4-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.9 1-1.2 1.5.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9.6 0 1-.4 1-1s-.5-1-1-1z"></path></g></g></svg>
                    </span>
                </a>
                <a href="#_" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-green-400 border border-green-400 rounded-md shadow-sm focus:ring-offset-gray-900 hover:bg-green-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400" data-rounded="rounded-md" data-primary="green-400">
                    Sign Up
                </a>
            </div>

            <!-- Mobile Button -->
            <div class="flex items-center justify-center h-full mr-5 text-white md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
            </div>

        </div>
    </div>
</section><section class="relative flex flex-col-reverse w-full px-6 py-16 bg-gray-900 lg:pt-0 lg:flex-col lg:pb-0">
    <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
        <svg class="absolute left-0 hidden h-full text-gray-900 transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice"><path d="M50 0H80L50 120H0L50 0Z"></path></svg>
        <img class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full" src="https://images.unsplash.com/photo-1601933470096-0e34634ffcde?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80" alt="">
    </div>
    <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
        <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
            <p class="flex inline-block text-sm font-semibold tracking-wider text-purple-200 uppercase rounded-full mb-7">
                New Features
            </p>
            <h1 class="mb-5 font-sans text-3xl font-bold tracking-tight text-white sm:text-6xl sm:leading-none">
                The Future of<br class="hidden md:block">
                <span class="inline-block text-purple-500">Web Design</span>
            </h1>
            <p class="mb-5 text-base text-gray-300 sm:pr-10 md:text-lg">
                Learn how we are tranforming the world of web design. These state-of-the-art innovative tools will remind you of why you got into design in the first place.
            </p>
            <div class="flex flex-col items-center pt-2 sm:flex-row sm:pt-4">
                <a href="/" class="inline-flex items-center justify-center w-full h-12 px-6 mb-4 font-medium tracking-wide text-white transition duration-200 bg-purple-500 rounded shadow-md sm:w-auto sm:mr-4 sm:mb-0 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                    Get started
                </a>
                <a href="/" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 bg-gray-700 rounded shadow-md sm:w-auto hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section><section class="w-full py-20 bg-gray-50">
    <div class="px-10 mx-auto max-w-7xl">
        <div class="px-10 mb-8 space-y-5 lg:px-0 lg:text-center lg:mb-16">
            <h2 class="text-4xl font-bold sm:text-5xl">Powerful Design Templates</h2>
            <p class="text-lg text-gray-600 w-ful sm:text-xl">The most powerful and customizable design templates to help you tell your story.</p>
        </div>
        <div class="grid overflow-hidden lg:rounded-xl">
            <div class="grid items-center lg:grid-cols-2">
                <div class="flex flex-col items-start justify-center h-full py-16 pl-16 pr-16 space-y-4 bg-white lg:pr-20 lg:py-0">
                    <h3 class="text-2xl font-semibold sm:text-4xl">Expertly Crafted</h3>
                    <p class="text-lg text-gray-600">
                        A beautiful drag and drop interface that allows you to create the landing page of your dreams. Our templates are designed for maximum conversion and the best user experience.
                    </p>
                </div>
                <div class="overflow-hidden bg-gray-100 h-96">
                    <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=3270&amp;q=80" class="object-cover w-full h-full" alt="">
                </div>
            </div>

            <div class="grid items-center lg:grid-cols-2">
                <div class="order-last overflow-hidden bg-gray-100 h-96 lg:order-first">
                    <img src="https://images.unsplash.com/photo-1541506618330-7c369fc759b5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1665&amp;q=80" class="object-cover w-full h-full" alt="">
                </div>
                <div class="flex flex-col items-start justify-center h-full py-16 pl-16 pr-16 space-y-4 bg-white lg:pr-20 lg:py-0">
                    <h3 class="text-2xl font-semibold sm:text-4xl">Magnificent Designs</h3>
                    <p class="text-lg text-left text-gray-600">
                        Delight your users with the most intuitive and easy to follow designs that will help you convert those visitors into paying customers.
                    </p>
                </div>
            </div>

            <div class="grid items-center lg:grid-cols-2">
                <div class="flex flex-col items-start justify-center h-full py-16 pl-16 pr-16 space-y-4 bg-white lg:pr-20 lg:py-0">
                    <h3 class="text-2xl font-semibold sm:text-4xl">Easily Customizable</h3>
                    <p class="text-lg text-gray-600">
                        All our templates are easy to customize and make your own. It has never been easier to integrate beautiful designs into your web applications.
                    </p>
                </div>
                <div class="bg-gray-100 h-96">
                    <img src="https://images.unsplash.com/photo-1416339442236-8ceb164046f8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=3203&amp;q=80" class="object-cover w-full h-full" alt="">
                </div>
            </div>
        </div>
    </div>
</section><section class="flex flex-col w-full bg-black md:flex-row">
    <div class="flex flex-col items-center justify-center w-full p-10 md:w-1/2 lg:p-16 xl:p-24">
        <h2 class="max-w-lg text-4xl font-light leading-tight text-white md:text-3xl lg:text-4xl xl:text-5xl">We have the tools you need to succeed</h2>
        <p class="max-w-lg mt-5 text-xl text-gray-500 md:text-base lg:text-xl">Our powerful and revolutionary tools are designed to help your business thrive.</p>
    </div>

    <div class="w-full md:w-1/2">
        <img src="https://cdn.devdojo.com/images/november2020/tools-bg.jpeg?q=75&amp;auto=format" class="inset-0 object-cover">
    </div>
</section><section class="py-8 bg-black sm:py-10 md:py-12 lg:py-16 xl:py-20" data-tails-scripts="//unpkg.com/alpinejs">
    <div class="max-w-6xl px-8 mx-auto lg:px-16">
        <h2 class="mb-2 text-xl font-bold text-white md:text-3xl">FAQ</h2>

        <div class="relative flex flex-col mt-2 mt-8 lg:flex-row">

            <!-- Left side of FAQs -->
            <div class="relative w-full lg:w-1/2 lg:pr-12">
                <!-- Question 1 -->
                <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                    <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                        <span>Where do I go to upgrade my account?</span>
                        <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </h4>
                    <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You can upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many other applications and sections of the site.</p>
                </div>

                <!-- Question 2 -->
                <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                    <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                        <span>How do I use Tails in my project?</span>
                        <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </h4>
                    <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">Implementation in your project is very simple. You can use the exported page as a starting point, or you can copy and paste the HTML into your own page.</p>
                </div>

                <!-- Question 3 -->
                <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                    <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                        <span>How long will I have access to Tails?</span>
                        <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </h4>
                    <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You will have unlimited access to all your pre-built pages; however, if you want to be able to download and export your pages, you'll need a pro account. Paddle for processing payments.</p>
                </div>


                <!-- Question 4 -->
                <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                    <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                        <span>What is the license on the pages?</span>
                        <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </h4>
                    <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You have unlimited use to the templates used in Tails; however, you cannot re-use the templates to sell for others to use.</p>
                </div>
            </div>


            <!-- Right side of FAQs -->
            <div class="relative w-full lg:w-1/2 lg:pl-12">
                <!-- Question 1 -->
                <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                    <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                        <span>How Many API Calls Do I Get?</span>
                        <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </h4>
                    <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">The free plan will give you 2,000 free API calls. At anytime, if you wish to <a href="#_" class="font-medium text-blue-500 underline" data-primary="blue-500">upgrade to a paid plan</a>, you can eaisily increase that amount.</p>
                </div>

                <!-- Question 2 -->
                <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                    <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                        <span>Where Can I Learn More?</span>
                        <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </h4>
                    <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You can learn more about using our API by visiting our <a href="#_" class="font-medium text-blue-500 underline" data-primary="blue-500">Academy page</a> which contains screencasts that will teach you the ins-and-outs of using the API. You may also visit the <a href="#_" class="font-medium text-blue-500 underline" data-primary="blue-500">developer docs</a> to learn more.</p>
                </div>

                <!-- Question 3 -->
                <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                    <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                        <span>Do You Have Any SDK's?</span>
                        <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </h4>
                    <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">Absolutely, we have an SDK for most of the popular languages and frameworks. Be sure to visit our <a href="#_" class="font-medium text-blue-500 underline" data-primary="blue-500">list of SDK's</a> to learn how you can build on top of our service.</p>
                </div>


                <!-- Question 4 -->
                <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                    <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                        <span>Can I Become an Affiliate?</span>
                        <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </h4>
                    <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">Yes. We are utilizing <a href="https://paddle.com" class="font-medium text-blue-500 underline" data-primary="blue-500">paddle</a>, which has a fully functional affiliate program. <a href="#_" class="font-medium text-blue-500 underline" data-primary="blue-500">Click here</a> to signup as an affiliate.</p>
                </div>
            </div>


        </div>

    </div>
</section><div class="py-10 bg-white md:py-16">
    <div class="px-10 mx-auto max-w-7xl md:px-16">
        <div class="max-w-3xl mx-auto mb-10 md:mb-16">
            <p class="text-xs font-bold text-blue-500 uppercase">Contact Us</p>
            <h2 class="mt-1 text-2xl font-bold text-left text-gray-800 lg:text-3xl md:mt-2">Need to ask us a question?</h2>
            <p class="max-w-screen-md mx-auto mt-4 text-left text-gray-500 md:text-lg md:mt-6">
                Fill out the form below and we'll do some research on our end and get back to you within 24-48 hours. For specific technical issues, please visit our <a href="#_" class="font-medium text-blue-500 underline">developer help center</a>.
            </p>
        </div>
        <form class="grid max-w-3xl gap-4 mx-auto sm:grid-cols-2" id="contact-form" method="post" action="{{ route('contact') }}">
            @csrf
            <div class="">
                <label for="first-name" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">First name</label>
                <input name="first-name" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: pointer;" required>
            </div>

            <div>
                <label for="last-name" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Last name</label>
                <input name="last-name" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" required>
            </div>

            <div class="sm:col-span-2">
                <label for="email" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Email</label>
                <input name="email" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" required>
            </div>

            <div class="sm:col-span-2">
                <label for="subject" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Subject</label>
                <input name="subject" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" required>
            </div>

            <div class="sm:col-span-2">
                <label for="message" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Message</label>
                <textarea name="message" class="w-full h-64 px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" required></textarea>
            </div>

            <div class="flex items-center justify-between sm:col-span-2">
                <button class="inline-block px-8 py-3 text-sm font-semibold text-center text-white transition duration-100 bg-blue-600 rounded-md outline-none hover:bg-blue-500 active:bg-blue-700 ring-blue-300 md:text-base"
                        id="contact-submit"
                        disabled
                >
                    Send Message
                </button>
            </div>
        </form>
        <p class="max-w-3xl mx-auto mt-5 text-xs text-gray-400">
            Please allow up to 24-48 hour response during the weekdays.
        </p>
    </div>
</div><section class="py-10 bg-black">
    <div class="px-10 mx-auto max-w-7xl">
        <div class="flex flex-col items-center md:flex-row md:justify-between">
            <a href="#_" class="flex items-center justify-center w-10 h-10 mr-3 rounded-lg mb-7 bg-gradient-to-br from-purple-500 via-indigo-600 to-blue-500 rounded-xxl">
                <svg class="w-5 h-5 text-white fill-current" viewBox="0 0 39 15" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.252 1.152C4.184 2.526.454 6.918.061 14.329c1.963-4.049 4.798-5.975 8.503-5.778 2.115.112 3.84 1.295 5.75 2.603 3.11 2.133 6.712 4.601 13.281 3.324 7.068-1.374 10.798-5.766 11.191-13.177-1.963 4.049-4.798 5.975-8.503 5.779-2.115-.113-3.84-1.296-5.75-2.604-3.11-2.133-6.712-4.601-13.281-3.324z" fill-rule="evenodd"></path>
                </svg>
            </a>

            <div class="flex flex-row justify-center mb-4 -ml-4 -mr-4"> <a href="#" class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z"></path>
                    </svg> </a> <a href="#" class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z"></path>
                    </svg> </a> <a href="#" class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <circle cx="12.145" cy="3.892" r="1"></circle>
                            <path d="M8 12c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z"></path>
                            <path d="M12 16H4c-2.056 0-4-1.944-4-4V4c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zM4 2c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2V4c0-.935-1.065-2-2-2H4z"></path>
                        </g>
                    </svg> </a> </div>
        </div>
        <div class="flex flex-col justify-between text-center md:flex-row">
            <p class="order-last text-sm leading-tight text-gray-500 md:order-first"> Crafted with <a href="https://devdojo.com/tails" class="text-white">Tails</a>. Built with ❤️ by our team. </p>
            <ul class="flex flex-row justify-center pb-3 -ml-4 -mr-4 text-sm">
                <li> <a href="#_" class="px-4 text-gray-500 hover:text-white">Contact</a> </li>
                <li> <a href="#_" class="px-4 text-gray-500 hover:text-white">About US</a> </li>
                <li> <a href="#_" class="px-4 text-gray-500 hover:text-white">FAQ's</a> </li>
                <li> <a href="#_" class="px-4 text-gray-500 hover:text-white">Terms</a></li>
            </ul>
        </div>
    </div>
</section>

<script src="//unpkg.com/alpinejs" defer></script>

</body>
</html>
