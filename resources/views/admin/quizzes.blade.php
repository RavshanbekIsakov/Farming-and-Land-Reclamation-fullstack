
@extends('admin.header_footer')

@section('quizzes') active @endsection


@section('section')
    <main class="content teachers">
        <div class="container-fluid p-0">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">Test yaratish bazasi</h5>
                        <button class="btn btn-primary add"><i class="align-middle" data-feather="user-plus"></i>
                            Qo'shish
                        </button>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Savol</th>
                            <th>A javob</th>
                            <th>B javob</th>
                            <th>C javob</th>
                            <th>D javob</th>
                            <th>To'g'ri javob</th>
                            <th>Savol rasmi</th>
                            <th>Savol turi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($quizzes as $id => $item)
                            <tr>
                                <td>{{ $item->questions }}</td>
                                <td>{{ $item->option_a }}</td>
                                <td>{{ $item->option_b }}</td>
                                <td>{{ $item->option_c }}</td>
                                <td>{{ $item->option_d }}</td>
                                <td>{{ $item->option_correct }}</td>
                                <td class="w-15"><img src="../img/quizzes/{{ $item->question_photo }}" alt="" class="img-fluid w-50"></td>
                                <td>{{ $item->question_type }}</td>
                                <td>
                                    <form action="{{ route('admin.delete.question') }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <button type="submit"
                                                class="btn btn-danger text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-trash-2 align-middle">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <main class="content forma" style="padding-bottom: 0; display: none">
        <div class="container-fluid p-0">
            <div class="col-md-8 col-xl-9">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Yangi labaratoriya mashg'iloti qo'shish</h5>
                        </div>
                        <div class="card-body h-100">
                            <form action="{{ route('admin.add.quiz') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Savol<span class="text-danger">*</span></label>
                                    <input name="question" required type="text" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">A javob<span class="text-danger">*</span></label>
                                    <input name="option_a" required type="text" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">B javob<span class="text-danger">*</span></label>
                                    <input name="option_b" required type="text" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">C javob<span class="text-danger">*</span></label>
                                    <input name="option_c" required type="text" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">D javob<span class="text-danger">*</span></label>
                                    <input name="option_d" required type="text" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">To'g'ri javob<span class="text-danger">*</span></label>
                                    <select required name="option_correct" class="form-control">
                                        <option value="a">A javob</option>
                                        <option value="b">B javob</option>
                                        <option value="c">C javob</option>
                                        <option value="d">D javob</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Rasm</label>
                                    <input name="image" type="file" class="form-control" placeholder="" accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Savol turi<span class="text-danger">*</span></label>
                                    <select id="book_types" required name="quiz_type" class="form-control">
                                        <option value="1">Dehqonchilik</option>
                                        <option value="2">Melioratsiya</option>
                                    </select>
                                </div>
                                <div class=" text-end">
                                    <button type="button" class="btn btn-danger cancel">Bekor qilish</button>
                                    <input type="submit" class="btn btn-success" value="Qo'shish">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@section('js')
    <script>
        $(".add").on("click", function () {
            $('.forma').show();
            $('.teachers').hide();
        });

        $(".cancel").on("click", function () {
            event.stopPropagation();
            $('.forma').hide();
            $('.teachers').show();
        });

        @if($errors->any())
        const notyf = new Notyf();

        @foreach ($errors->all() as $error)
        notyf.error({
            message: '{{ $error }}',
            duration: 5000,
            dismissible: true,
            position: {
                x: 'center',
                y: 'top'
            },
        });
        @endforeach

        @endif

        @if(session('success') == 1)
        const notyf = new Notyf();

        notyf.success({
            message: 'Maqola qo\'shildi',
            duration: 10000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'bottom'
            },
        });
        @endif

        @if(session('link') == 1)
        const notyf = new Notyf();

        notyf.error({
            message: 'Nimadir noto\'g\'ri',
            duration: 10000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'bottom'
            },
        });
        @endif

        @if(session('delete') == 1)
        const notyf = new Notyf();

        notyf.warning({
            message: 'Maqola o\'chirildi!',
            duration: 10000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'bottom'
            },
        });
        @endif
    </script>
@endsection

