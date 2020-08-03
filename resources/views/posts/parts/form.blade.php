<div class="from-group">
    <input type="text" class="form-control" name="title" required value="{{$post->title ?? ''}}">
</div>
<div class="from-group">
    <textarea name="descr" rows="10" class="form-control" required>{{$post->descr ?? ''}}</textarea>
</div>
<div class="from-group">
    <input type="file" name="img">
</div>
