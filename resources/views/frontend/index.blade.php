@extends('layouts.frontend')

@section('content')

<section id="blog-posts-2" class="blog-posts-2 section">
   <div class="container">
      <div class="row gy-5">

         @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
               <article>
                  <div class="post-img">
                     <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                  </div>

                  <div class="meta-top">
                     <ul>
                        <li class="d-flex align-items-center">
                           <a>{{ $blog->category->name ?? 'Uncategorized' }}</a>
                        </li>
                        <li class="d-flex align-items-center">
                           <i class="bi bi-dot"></i>
                           <a>
                              <time datetime="{{ $blog->created_at->format('Y-m-d') }}">
                                 {{ $blog->created_at->format('M d, Y') }}
                              </time>
                           </a>
                        </li>
                     </ul>
                  </div>

                  <h2 class="title">
                     <a href="{{ route('blog.details', $blog->slug) }}">{{ $blog->title }}</a>
                  </h2>

               </article>
            </div>
         @endforeach

      </div>
   </div>
</section>

<section id="blog-pagination" class="blog-pagination section">
   <div class="container">
      <div class="d-flex justify-content-center">
         {{ $blogs->links('pagination::bootstrap-4') }} 
      </div>
   </div>
</section>

@endsection