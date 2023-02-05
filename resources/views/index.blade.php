<!-- head内 -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- body内 -->
<!-- 参考：$itemにはReviewControllerから渡した投稿のレコード$itemsをforeachで展開してます -->
@auth
  <!-- Review.phpに作ったisLikedByメソッドをここで使用 -->
  @if (!$review->isLikedBy(Auth::user()))
    <span class="likes">
        <i class="fas fa-music like-toggle" data-review-id="{{ $item->id }}"></i>
      <span class="like-counter">{{$item->likes_count}}</span>
    </span><!-- /.likes -->
  @else
    <span class="likes">
        <i class="fas fa-music heart like-toggle liked" data-review-id="{{ $item->id }}"></i>
      <span class="like-counter">{{$item->likes_count}}</span>
    </span><!-- /.likes -->
  @endif
@endauth
@guest
  <span class="likes">
      <i class="fas fa-music heart"></i>
    <span class="like-counter">{{$item->likes_count}}</span>
  </span><!-- /.likes -->
@endguest