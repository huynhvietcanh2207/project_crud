@extends('dashboard')

@section('content')
<!-- <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$messi->id}}</td>
                            <td>{{$messi->name}}</td>
                            <td>{{$messi->email}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main> -->

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <h1 class="display-5 fw-bolder">Màn hình chi tiết</h1>
                <table>
                    <tr>
                        <td>
                            <div class="small mb-1">Username: </div>
                        </td>
                        <td>
                            <h3 class="">{{$messi->name}}</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="small mb-1">email: </div>
                        </td>
                        <td>
                            <h3 class="">{{$messi->email}}</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="small mb-1">Phone Number: </div>
                        </td>
                        <td>
                            <h3 class="">{{$messi->phone_number}}</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="small mb-1">Image :</div>
                        </td>
                        <td>
                            @if (!empty($messi->profile_image))
                            <img src="data:image/jpeg;base64,{{ base64_encode($messi->profile_image) }}" alt="Profile Image">
                            @else
                            <p>Không có hình ảnh</p>
                            @endif
                        </td>
                    </tr>



                </table>
                <div class="d-flex">
                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        chỉnh sửa
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection