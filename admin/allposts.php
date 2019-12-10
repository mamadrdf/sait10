<div class="d-flex justify-content-between align-items-center mb-3 border-bottom-1">
    <h2>همه مطالب</h2>
    
</div>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>عنوان دوره </th>
            <th>تعداد نظرات</th>
            <th>مقدار بازدید</th>
            <th>تعد شرکت کننده ها</th>
            <th>تنظیمات</th>
        </tr>
        </thead>
        <tbody>
                    <tr>
                        <td><a href="/courses/<%=item.slug %>">عنوان 1</a></td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                           0
                        </td>
                        <td>
                            <form action="/admin/courses/<%=item._id %>?_method=DELETE" method="post">

                                <div class="btn-group btn-group-sm">
                                    <a href="/admin/courses/<%=item._id %>/edit"  class="btn btn-primary">ویرایش</a>
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="/courses/<%=item.slug %>">عنوان 1</a></td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                           0
                        </td>
                        <td>
                            <form action="/admin/courses/<%=item._id %>?_method=DELETE" method="post">

                                <div class="btn-group btn-group-sm">
                                    <a href="/admin/courses/<%=item._id %>/edit"  class="btn btn-primary">ویرایش</a>
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="/courses/<%=item.slug %>">عنوان 1</a></td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                           0
                        </td>
                        <td>
                            <form action="/admin/courses/<%=item._id %>?_method=DELETE" method="post">

                                <div class="btn-group btn-group-sm">
                                    <a href="/admin/courses/<%=item._id %>/edit"  class="btn btn-primary">ویرایش</a>
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </div>
                            </form>
                        </td>
                    </tr>
              
        </tbody>
    </table>

      
</div>

