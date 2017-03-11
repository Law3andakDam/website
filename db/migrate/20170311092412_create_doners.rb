class CreateDoners < ActiveRecord::Migration[5.1]
  def change
    create_table :doners do |t|
      t.references :blood_type, foreign_key: true, null: false
      t.string :email, null: false, default: ''
      t.string :mobile, null: false, default: ''
      t.string   :confirmation_token
      t.datetime :confirmed_at
      t.datetime :confirmation_sent_at

      t.timestamps
    end

    add_index :doners, :confirmation_token, unique: true
    add_index :doners, :email, unique: true
  end
end
