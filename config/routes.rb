require 'sidekiq/web'

Rails.application.routes.draw do
  root 'pages#index'
  resources :doners, only: %i(new index create) do
    get :confirmation, on: :collection
  end
  mount Sidekiq::Web => '/sidekiq/jobs'

  %i(about contact terms).each do |page|
    get page, to: "pages##{page}", as: page
  end

  devise_for :users
  mount RailsAdmin::Engine => '/admin', as: 'rails_admin'
end
