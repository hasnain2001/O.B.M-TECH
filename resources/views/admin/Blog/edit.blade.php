@extends('admin.layouts.app')
@section('title')
    Update
@endsection
@section('main-content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-">
                    <h1>Update Blog</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissable">
                    <i class="fa fa-ban"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>{{ session('success') }}</b>
                </div>
            @endif
            @if ($errors->any())
            <div  class="alert alert-danger" >
                <strong>Validation error(s):</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form name="UpdateCategory" id="UpdateCategory" method="POST" enctype="multipart/form-data" action="{{ route('admin.Blog.update', $blog->id) }}">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title"> Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{ $blog->title }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="slug"> Slug/Url Blog <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="slug" id="slug" value="{{ $blog->slug }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="category_image">Category Image <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" name="category_image" id="blog_image">
                                    @if ($blog->category_image)
                                    <img src="{{ asset($blog->category_image) }}" alt="Category Image" class="img-thumbnail" style="max-width: 80px;">
                                @else
                                    <span class="badge badge-secondary">No Image</span>
                                @endif
                                     <!-- Preview container -->
                        <div id="imagePreview" style="margin-top: 10px;"></div>
                                </div>
                                <textarea id="editor" name="content"> <td>{!!$blog->content!!}</td></textarea>
                            </div>

                                 <div class="form-group">
                                    <label for="name">Meta Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{ $blog->meta_title }}" >
                                </div>
                                <div class="form-group">
                                    <label for="meta_tag">Meta Tag <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="meta_tag" id="" value="{{ $blog->meta_tag }}" >
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="{!! $blog->meta_keyword !!}" >
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" class="form-control" cols="30" rows="5" style="resize: none;" value="{!! $blog->meta_description !!}"  ></textarea>
                                </div>
                                                                <button type="submit" class="btn btn-dark">Submit</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="reset" class="btn btn-secondary text-white">Reset</button>
                        <a href="{{ route('admin.blog.show')}}" class="btn btn-danger">cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    // JavaScript to preview the selected image
    document.getElementById('blog_image').addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(event) {
                var imgElement = document.createElement('img');
                imgElement.setAttribute('src', event.target.result);
                imgElement.setAttribute('class', 'preview-image'); // Optional: Add CSS class for styling
                imgElement.setAttribute('style', 'max-width: 100%; height: 50px;'); // Optional: Add styling
                document.getElementById('imagePreview').innerHTML = ''; // Clear previous preview, if any
                document.getElementById('imagePreview').appendChild(imgElement);
            }
            reader.readAsDataURL(file);
        } else {
            document.getElementById('imagePreview').innerHTML = ''; // Clear preview if no file selected
        }
    });
         // Filter non-alphabetic characters in the 'name' input field and auto-fill 'slug'
         const inputOne = document.getElementById('title');
            const textOnlyInput = document.getElementById('slug');
        
            inputOne.addEventListener('input', () => {
                const value = inputOne.value;
                // Filter out non-alphabetic characters and update slug automatically
                const filteredValue = value.replace(/[^A-Za-z\s]/g, '');
                textOnlyInput.value = filteredValue;
                
                // Automatically check slug existence after auto-filling
                checkSlugExistence(filteredValue);
            });
        
            $(document).ready(function() {
                // Check slug existence when the user types manually in the slug field
                $('#slug').on('keyup', function() {
                    var slug = $(this).val();
                    
                    // Check if the slug has any value (optional: avoid AJAX if empty)
                    if (slug) {
                        checkSlugExistence(slug);
                    } else {
                        $('#slug-message').text('Please enter a slug').css('color', 'black');
                    }
                });
            });
</script>

@endsection
