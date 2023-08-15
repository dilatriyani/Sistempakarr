@extends('Admin.Partials.index')

@section('container')
    <main id="main" class="main">
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            @if ($user->photo)
                            <img src="{{ asset('storage/photos/' . $user->photo) }}" alt="{{ $user->name }}" class="img-thumbnail" width="100" height="100">
                        @else
                            No image available.
                        @endif
                        
                            <div class="person-name">
                                <h2 class="text-center fs-4 my-2">{{ Auth::user()->name }}</h2>
                            </div>
                            <div class="person-email">
                                <h3 class="text-center fs-5 fw-normal mb-3">{{ Auth::user()->email }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">About</h5>
                                    <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores
                                        cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure
                                        rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at
                                        unde.</p>
    
                                    <h5 class="card-title">Profile Details</h5>
    
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Name</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Level</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->role }}</div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                                    </div>
    
                                    <div class="password-container">
                                        <div class="col-md-4">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" id="password-input" placeholder="Password" value=""
                                                required>
                                            <span class="password-toggle" id="password-toggle"
                                                onclick="togglePasswordVisibility()"></span>
                                        </div>
                                    </div>

                                   
                                    
                                    
                                </div>
    
                                <div class="tab-pane fade pt-3" id="profile-edit">
                                    <!-- Edit Profile Form -->
                                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="editName"
                                                class="col-md-4 col-lg-3 col-form-label">Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="editName"
                                                    value="{{ Auth::user()->name }}" required>
                                            </div>
                                        </div>
    
                                        <div class="row mb-3">
                                            <label for="editEmail"
                                                class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="editEmail"
                                                    value="{{ Auth::user()->email }}" required>
                                            </div>
                                        </div>
    
                                        <div class="row mb-3">
                                            <label for="editPhoto"
                                                class="col-md-4 col-lg-3 col-form-label">Photo</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="photo" type="file" class="form-control" id="editPhoto">
                                            </div>
                                        </div>
    
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                    <!-- End Edit Profile Form -->
                                </div>
    
                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form action="{{ route('profile.changePassword') }}" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="currentPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Password Lama</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="current_password" type="password" class="form-control"
                                                    id="currentPassword" required>
                                            </div>
                                        </div>
    
                                        <div class="row mb-3">
                                            <label for="newPassword"
                                                class="col-md-4 col-lg-3 col-form-label"> Password Baru</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="new_password" type="password" class="form-control"
                                                    id="newPassword" required>
                                            </div>
                                        </div>
    
                                        <div class="row mb-3">
                                            <label for="renewPassword"
                                                class="col-md-4 col-lg-3 col-form-label"> Ulangi Password Baru</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="new_password_confirmation" type="password"
                                                    class="form-control" id="renewPassword" required>
                                            </div>
                                        </div>
    
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Ubah Password</button>
                                        </div>
                                    </form>
                                    <!-- End Change Password Form -->
                                </div>
                            </div><!-- End Tab Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <script>
            function togglePasswordVisibility() {
                var passwordInput = document.getElementById("password-input");
                var passwordToggle = document.getElementById("password-toggle");
    
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    passwordToggle.innerHTML = "&#128064;"; // Change icon to cross when the password is visible
                } else {
                    passwordInput.type = "password";
                    passwordToggle.innerHTML = "&#128065;"; // Change icon to eye when the password is hidden
                }
            }
        </script>
        
        
    </main>
    
@endsection
 