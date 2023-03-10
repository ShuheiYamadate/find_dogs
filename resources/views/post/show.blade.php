<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿の個別表示
        </h2>

        <x-message :message="session('message')" />

    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <div class="px-10 mt-4">


                {{-- 修正部分 --}}
                <div class="bg-white w-full  rounded-2xl px-10 pt-2 pb-8 shadow-lg hover:shadow-2xl transition duration-500">
                    <div class="mt-4">
                        <div class="flex">
                            <div class="rounded-full w-12 h-12">
                                {{-- アバター表示 --}}
                                <img src="{{asset('storage/avatar/'.($post->user->avatar??'user_default.jpg'))}}">
                            </div>
                            <h1 class="text-lg text-gray-700 font-semibold float-left pt-4">
                                {{ $post->title }}
                            </h1>
                        </div>
                        {{-- 修正部分ここまで --}}

                {{-- <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                    <div class="mt-4">
                        <h1 class="text-lg text-gray-700 font-semibold">
                            {{ $post->title }}
                        </h1> --}}


                        <hr class="w-full">
                        <div class="flex justify-end mt-4">
                            @can('update', $post)
                            <a href="{{route('post.edit', $post)}}">
                                <x-primary-button class="myclass float-right">編集</x-primary-button>
                            </a>
                            @endcan
                            @can('delete', $post) 
                            <form method="post" action="{{route('post.destroy', $post)}}">
                                @csrf
                                @method('delete')
                                <x-primary-button class="myclassr float-right ml-4" onClick="return confirm('本当に削除しますか？');">削除</x-primary-button>
                            </form>
                            @endcan
                        </div>
                        <p class="mt-4 text-gray-600 py-4">{{$post->body}}</p>

                        <div class="flex justify-between mt-4">
                        {{-- 画像を表示 23-26 --}}
                            <div>
                                (画像ファイル:{{$post->image}})
                            
                                <img src="{{asset('storage/images/'.$post->image)}}" class="mx-auto" style="width:500px;">
                            </div>    
                            <iframe src="https://calendar.google.com/calendar/embed?src=66737ae9f371d8d55de55e37626fcdbb970d238e6c36d46260d370c7df5b8c05%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0 height:300px" width="400" height="400" frameborder="0" scrolling="no"></iframe>

                        </div>

                        <div class="text-sm font-semibold flex flex-row-reverse">
                            <p> {{ $post->user->name??'削除されたユーザー' }} • {{$post->created_at->diffForHumans()}}</p>
                        </div>
                    </div>
                    {{-- コメント表示 --}}
                    @foreach ($post->comments as $comment)
                    <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500 mt-8">
                        {{$comment->body}}
                        <div class="text-sm font-semibold flex flex-row-reverse">

                                {{-- クラスを変更 --}}
                            <p class="float-left pt-4"> {{ $comment->user->name??'削除されたユーザー' }} • {{$comment->created_at->diffForHumans()}}</p>
                            {{-- アバター追加 --}}
                            <span class="rounded-full w-12 h-12">
                            <img src="{{asset('storage/avatar/'.($comment->user->avatar??'user_default.jpg'))}}">
                            </span>
                            
                            {{-- <p> {{ $comment->user->name }} • {{$comment->created_at->diffForHumans()}}</p> --}}

                        </div>
                    </div>
                    @endforeach

                    
                    {{-- 追加部分 --}}
                    <div class="mt-4 mb-12">
                        <form method="post" action="{{route('comment.store')}}">
                            @csrf
                            <input type="hidden" name='post_id' value="{{$post->id}}">
                            <textarea name="body" class="bg-white w-full  rounded-2xl px-4 mt-4 py-4 shadow-lg hover:shadow-2xl transition duration-500" id="body" cols="30" rows="3" placeholder="コメントを入力してください">{{old('body')}}</textarea>
                            <x-primary-button class="myclassc float-right mr-4 mb-12">コメントする</x-primary-button>
                        </form>
                    </div>
                    {{-- 追加部分終わり --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>