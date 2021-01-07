<x-jet-form-section submit="">
    <x-slot name="title">
        {{ __('Minhas páginas') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Páginas que serão mostradas no site do curso. Seja responsável com o conteúdo da sua página.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-5">
            <p class="font-medium text-xl font-semibold text-gray-100">
                <x-fas-link class="h-5 w-5 inline-block mr-1" />
                <span class="text-gray-400">cc.uffs.edu.br/pessoa/</span>{{ $user->uid }}
            </p>
        </div>

        <div class="col-span-1">
            <x-toggle name="enabled" checked="{{ $site->enabled }}" label="Ativa" wire:model="site.enabled">Inativa</x-toggle>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <!-- Use: https://stackoverflow.com/a/48288795 -->
            <p class="text-green-300">
                <x-fas-external-link-alt class="h-3 w-3 inline-block mr-1" />
                <a href="https://cc.uffs.edu.br/pessoa/{{ $user->uid }}" class="font-medium text-sm hover:underline">cc.uffs.edu.br/pessoa/{{ $user->uid }}</a>
            </p>
            
            <p class="text-green-300">
                <x-fas-external-link-alt class="h-3 w-3 inline-block mr-1" />
                <a href="https://uffs.cc/{{ $user->uid }}" class="font-medium text-sm hover:underline">uffs.cc/{{ $user->uid }}</a>
            </p>
        </div>

        <div class="col-span-7 text-gray-400">
            <p class="text-gray-100 font-bold">
                <x-fab-github class="h-4 w-4 inline-block mr-1" />
                Conteúdo
            </p>
            <p class="mt-1">O conteúdo dessa página vem de um repositório no Github: <a href="https://github.com/{{ $user->github }}/ccuffs-site" class="font-mono hover:underline">github.com/{{ $user->github }}/ccuffs-site</a>.</p>
        </div>

        <div class="col-span-7 text-gray-400">
            <p class="text-gray-100 font-bold">
                <x-fas-check-circle class="h-4 w-4 text-green-300 inline-block mr-1" />
                Tudo certo
            </p>
            <p class="mt-1">Não há problemas com essa página. A última vez que a página foi atualizada a partir da fonte de conteúdo foi em {{ $site->fetched_at }}.</p>
        </div>

        <x-jet-input-error for="name" class="mt-2" />
    </x-slot>
</x-jet-form-section>