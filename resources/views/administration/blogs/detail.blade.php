@extends('layouts.app') {{-- or whatever your main layout is --}}

@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Main Content: Blog Post -->
        <div class="col-lg-8">
            <article class="mb-5">
                <h1 class="mb-3">{{ $blog->title }}</h1>
                <p class="text-muted mb-4">
                    <small>Published on {{ $blog->created_at->format('F d, Y') }}</small> |
                    <small>Category:
                        <a href="#">{{ $blog->category->name ?? 'Uncategorized' }}</a>
                    </small>
                    |
                    <small>Tags:
                        @foreach($blog->tags as $t)
                            <a href="#" class="badge bg-secondary">{{ $t->name }}</a>
                        @endforeach
                    </small>
                </p>

                <div class="mb-4">
                    <img src="{{ asset('storage/' . $blog->featured_image) }}"
                         class="img-fluid w-100" alt="Featured Image">
                </div>

                <div class="blog-content">
                    {!! nl2br(e($blog->description)) !!}
                </div>
            </article>

            <!-- Comments Section -->
            @if($blog->allow_comments)
                <section id="comments-section">
                    <h3 class="mb-4">{{ $blog->comments->count() }} Comment(s)</h3>

                    <!-- List Existing Comments -->
                    <ul class="list-unstyled mb-5" id="comment-list">
                        @foreach($blog->comments as $comment)
                            <li class="media mb-4">
                                <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim($comment->email))) }}?s=64&d=identicon"
                                     class="mr-3 rounded-circle" alt="Avatar">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">{{ $comment->name }}
                                        <small class="text-muted">•
                                            {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                                        </small>
                                    </h5>
                                    <p>{{ $comment->comment }}</p>
                                    @if($comment->website)
                                        <p>Website: <a href="{{ $comment->website }}" target="_blank">
                                            {{ $comment->website }}</a></p>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Comment Submission Form -->
                    <div class="card mb-5">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Leave a Comment</h5>
                        </div>
                        <div class="card-body">
                            <form id="comment-form" action="{{ route('blog.comment', $blog->id) }}" method="POST" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="comment-name" class="form-label">Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="comment-name"
                                           class="form-control" placeholder="Your Name" required>
                                    <div class="invalid-feedback">Please enter your name.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="comment-email" class="form-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="comment-email"
                                           class="form-control" placeholder="Your Email" required>
                                    <div class="invalid-feedback">Please enter a valid email.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="comment-website" class="form-label">Website (optional)</label>
                                    <input type="url" name="website" id="comment-website"
                                           class="form-control" placeholder="Your Website URL">
                                </div>
                                <div class="mb-3">
                                    <label for="comment-mobile" class="form-label">Mobile (optional)</label>
                                    <input type="text" name="mobile" id="comment-mobile"
                                           class="form-control" placeholder="Your Mobile Number">
                                </div>
                                <div class="mb-3">
                                    <label for="comment-text" class="form-label">Comment<span class="text-danger">*</span></label>
                                    <textarea name="comment" id="comment-text" rows="4"
                                              class="form-control" placeholder="Write your comment here..."
                                              required></textarea>
                                    <div class="invalid-feedback">Please write a comment.</div>
                                </div>
                                <button type="submit" class="btn btn-primary" id="submitCommentBtn">Submit Comment</button>
                            </form>
                        </div>
                    </div>
                </section>
            @endif
        </div>

        <!-- Sidebar: Latest Blogs -->
        <div class="col-lg-4">
            <div class="card mb-5">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Latest Posts</h5>
                </div>
                <div class="list-group list-group-flush">
                    @foreach($latestBlogs as $lb)
                        <a href="{{ route('blog.show', $lb->slug) }}"
                           class="list-group-item list-group-item-action">
                            {{ Str::limit($lb->title, 50) }}
                            <br>
                            <small class="text-muted">{{ $lb->created_at->format('M d, Y') }}</small>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AJAX & Validation for Comment Submission -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let commentForm = document.getElementById('comment-form');

    commentForm.addEventListener('submit', function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        fetch(this.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: formData
        })
        .then(res => res.json())
        .then(response => {
            if (response.success) {
                Swal.fire({
                    title: 'Thank you!',
                    text: response.message,
                    icon: 'success',
                    confirmButtonText: 'OK'
                });

                // Prepend new comment to comment-list
                let comment = response.data;
                let avatar = `https://www.gravatar.com/avatar/${md5(comment.email.trim().toLowerCase())}?s=64&d=identicon`;

                let listItem = document.createElement('li');
                listItem.classList.add('media','mb-4');
                listItem.innerHTML = `
                    <img src="${avatar}" class="mr-3 rounded-circle" alt="Avatar">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">${comment.name}
                            <small class="text-muted">• Just now</small>
                        </h5>
                        <p>${comment.comment}</p>
                        ${comment.website ? `<p>Website: <a href="${comment.website}" target="_blank">${comment.website}</a></p>` : ''}
                    </div>
                `;
                document.getElementById('comment-list').prepend(listItem);

                commentForm.reset();
            } else {
                Swal.fire({
                    title: 'Error!',
                    text: response.message,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        })
        .catch(err => {
            Swal.fire({
                title: 'Error!',
                text: 'An error occurred while submitting comment.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
            console.error(err);
        });
    });
});

// Simple JS function to generate MD5 for Gravatar
function md5(string) {
    // Minimal MD5 implementation in JS (for demonstration)
    // In production, consider including a proper md5 library.
    function rotateLeft(lValue, iShiftBits) {
        return (lValue<<iShiftBits) | (lValue>>>(32-iShiftBits));
    }
    function addUnsigned(lX,lY){
        let lX4,lY4,lX8,lY8,lResult;
        lX8=(lX&0x80000000); lY8=(lY&0x80000000);
        lX4=(lX&0x40000000); lY4=(lY&0x40000000);
        lResult=(lX&0x3FFFFFFF)+(lY&0x3FFFFFFF);
        if(lX4&lY4) return (lResult^0x80000000^lX8^lY8);
        if(lX4|lY4){
            if(lResult&0x40000000)
              return (lResult^0xC0000000^lX8^lY8);
            else
              return (lResult^0x40000000^lX8^lY8);
        } else {
            return (lResult^lX8^lY8);
        }
    }
    function F(x,y,z){ return (x & y) | ((~x) & z); }
    function G(x,y,z){ return (x & z) | (y & (~z)); }
    function H(x,y,z){ return (x ^ y ^ z); }
    function I(x,y,z){ return (y ^ (x | (~z))); }
    function FF(a,b,c,d,x,s,ac){
        a = addUnsigned(a, addUnsigned(addUnsigned(F(b, c, d), x), ac));
        return addUnsigned(rotateLeft(a, s), b);
    }
    function GG(a,b,c,d,x,s,ac){
        a = addUnsigned(a, addUnsigned(addUnsigned(G(b, c, d), x), ac));
        return addUnsigned(rotateLeft(a, s), b);
    }
    function HH(a,b,c,d,x,s,ac){
        a = addUnsigned(a, addUnsigned(addUnsigned(H(b, c, d), x), ac));
        return addUnsigned(rotateLeft(a, s), b);
    }
    function II(a,b,c,d,x,s,ac){
        a = addUnsigned(a, addUnsigned(addUnsigned(I(b, c, d), x), ac));
        return addUnsigned(rotateLeft(a, s), b);
    }
    function convertToWordArray(str){
        let lWordCount;
        let lMessageLength = str.length;
        let lNumberOfWords_temp1 = lMessageLength + 8;
        let lNumberOfWords_temp2 = (lNumberOfWords_temp1 - (lNumberOfWords_temp1 % 64)) / 64;
        let lNumberOfWords = (lNumberOfWords_temp2 + 1) * 16;
        let lWordArray = Array(lNumberOfWords-1);
        let lBytePosition = 0;
        let lByteCount = 0;
        while (lByteCount < lMessageLength) {
            lWordCount = (lByteCount - (lByteCount % 4)) / 4;
            lBytePosition = (lByteCount % 4) * 8;
            lWordArray[lWordCount] = (lWordArray[lWordCount] | (str.charCodeAt(lByteCount) << lBytePosition));
            lByteCount++;
        }
        lWordCount = (lByteCount - (lByteCount % 4)) / 4;
        lBytePosition = (lByteCount % 4) * 8;
        lWordArray[lWordCount] = lWordArray[lWordCount] | (0x80 << lBytePosition);
        lWordArray[lNumberOfWords - 2] = lMessageLength << 3;
        lWordArray[lNumberOfWords - 1] = lMessageLength >>> 29;
        return lWordArray;
    }
    function wordToHex(lValue){
        let WordToHexValue="",WordToHexValue_temp="",lByte,lCount;
        for(lCount = 0; lCount<=3; lCount++){
            lByte = (lValue >>> (lCount * 8)) & 255;
            WordToHexValue_temp = "0" + lByte.toString(16);
            WordToHexValue = WordToHexValue + WordToHexValue_temp.substr(WordToHexValue_temp.length-2,2);
        }
        return WordToHexValue;
    }
    let x = [], k, AA, BB, CC, DD, a, b, c, d;
    let S11=7,S12=12,S13=17,S14=22;
    let S21=5,S22=9,S23=14,S24=20;
    let S31=4,S32=11,S33=16,S34=23;
    let S41=6,S42=10,S43=15,S44=21;
    str = unescape(encodeURIComponent(str));
    x = convertToWordArray(str);
    a = 0x67452301;
    b = 0xEFCDAB89;
    c = 0x98BADCFE;
    d = 0x10325476;
    for (k=0; k < x.length; k += 16) {
        AA = a; BB = b; CC = c; DD = d;
        a = FF(a, b, c, d, x[k+0],  S11,0xD76AA478);
        d = FF(d, a, b, c, x[k+1],  S12,0xE8C7B756);
        c = FF(c, d, a, b, x[k+2],  S13,0x242070DB);
        b = FF(b, c, d, a, x[k+3],  S14,0xC1BDCEEE);
        a = FF(a, b, c, d, x[k+4],  S11,0xF57C0FAF);
        d = FF(d, a, b, c, x[k+5],  S12,0x4787C62A);
        c = FF(c, d, a, b, x[k+6],  S13,0xA8304613);
        b = FF(b, c, d, a, x[k+7],  S14,0xFD469501);
        a = FF(a, b, c, d, x[k+8],  S11,0x698098D8);
        d = FF(d, a, b, c, x[k+9],  S12,0x8B44F7AF);
        c = FF(c, d, a, b, x[k+10], S13,0xFFFF5BB1);
        b = FF(b, c, d, a, x[k+11], S14,0x895CD7BE);
        a = FF(a, b, c, d, x[k+12], S11,0x6B901122);
        d = FF(d, a, b, c, x[k+13], S12,0xFD987193);
        c = FF(c, d, a, b, x[k+14], S13,0xA679438E);
        b = FF(b, c, d, a, x[k+15], S14,0x49B40821);
        a = GG(a, b, c, d, x[k+1],  S21,0xF61E2562);
        d = GG(d, a, b, c, x[k+6],  S22,0xC040B340);
        c = GG(c, d, a, b, x[k+11], S23,0x265E5A51);
        b = GG(b, c, d, a, x[k+0],  S24,0xE9B6C7AA);
        a = GG(a, b, c, d, x[k+5],  S21,0xD62F105D);
        d = GG(d, a, b, c, x[k+10], S22,0x02441453);
        c = GG(c, d, a, b, x[k+15], S23,0xD8A1E681);
        b = GG(b, c, d, a, x[k+4],  S24,0xE7D3FBC8);
        a = GG(a, b, c, d, x[k+9],  S21,0x21E1CDE6);
        d = GG(d, a, b, c, x[k+14], S22,0xC33707D6);
        c = GG(c, d, a, b, x[k+3],  S23,0xF4D50D87);
        b = GG(b, c, d, a, x[k+8],  S24,0x455A14ED);
        a = GG(a, b, c, d, x[k+13], S21,0xA9E3E905);
        d = GG(d, a, b, c, x[k+2],  S22,0xFCEFA3F8);
        c = GG(c, d, a, b, x[k+7],  S23,0x676F02D9);
        b = GG(b, c, d, a, x[k+12], S24,0x8D2A4C8A);
        a = HH(a, b, c, d, x[k+5],  S31,0xFFFA3942);
        d = HH(d, a, b, c, x[k+8],  S32,0x8771F681);
        c = HH(c, d, a, b, x[k+11], S33,0x6D9D6122);
        b = HH(b, c, d, a, x[k+14], S34,0xFDE5380C);
        a = HH(a, b, c, d, x[k+1],  S31,0xA4BEEA44);
        d = HH(d, a, b, c, x[k+4],  S32,0x4BDECFA9);
        c = HH(c, d, a, b, x[k+7],  S33,0xF6BB4B60);
        b = HH(b, c, d, a, x[k+10], S34,0xBEBFBC70);
        a = HH(a, b, c, d, x[k+13], S31,0x289B7EC6);
        d = HH(d, a, b, c, x[k+0],  S32,0xEAA127FA);
        c = HH(c, d, a, b, x[k+3],  S33,0xD4EF3085);
        b = HH(b, c, d, a, x[k+6],  S34,0x04881D05);
        a = HH(a, b, c, d, x[k+9],  S31,0xD9D4D039);
        d = HH(d, a, b, c, x[k+12], S32,0xE6DB99E5);
        c = HH(c, d, a, b, x[k+15], S33,0x1FA27CF8);
        b = HH(b, c, d, a, x[k+2],  S34,0xC4AC5665);
        a = II(a, b, c, d, x[k+0],  S41,0xF4292244);
        d = II(d, a, b, c, x[k+7],  S42,0x432AFF97);
        c = II(c, d, a, b, x[k+14], S43,0xAB9423A7);
        b = II(b, c, d, a, x[k+5],  S44,0xFC93A039);
        a = II(a, b, c, d, x[k+12], S41,0x655B59C3);
        d = II(d, a, b, c, x[k+3],  S42,0x8F0CCC92);
        c = II(c, d, a, b, x[k+10], S43,0xFFEFF47D);
        b = II(b, c, d, a, x[k+1],  S44,0x85845DD1);
        a = II(a, b, c, d, x[k+8],  S41,0x6FA87E4F);
        d = II(d, a, b, c, x[k+15], S42,0xFE2CE6E0);
        c = II(c, d, a, b, x[k+6],  S43,0xA3014314);
        b = II(b, c, d, a, x[k+13], S44,0x4E0811A1);
        a = II(a, b, c, d, x[k+4],  S41,0xF7537E82);
        d = II(d, a, b, c, x[k+11], S42,0xBD3AF235);
        c = II(c, d, a, b, x[k+2],  S43,0x2AD7D2BB);
        b = II(b, c, d, a, x[k+9],  S44,0xEB86D391);
        a = addUnsigned(a, AA);
        b = addUnsigned(b, BB);
        c = addUnsigned(c, CC);
        d = addUnsigned(d, DD);
    }
    let temp = wordToHex(a) + wordToHex(b) + wordToHex(c) + wordToHex(d);
    return temp.toLowerCase();
}
</script>
@endsection
